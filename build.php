<?php

// Clean up previous build artifacts
$distDir = _DIR_ . '/dist';
if (file_exists($distDir)) {
    deleteDirectory($distDir);
}
mkdir($distDir);

// Copy PHP files to the dist directory
copyDirectory(_DIR_, $distDir, ['.php']);

// Copy other static assets (e.g., CSS, JavaScript, images) to the dist directory
copyDirectory(_DIR_ . '/assets', $distDir);

// Optionally, you can run any additional build steps here, such as minifying CSS or JavaScript files

// Zip the contents of the dist directory
$zipFile = _DIR_ . '/myapp.zip';
zipDirectory($distDir, $zipFile);

// Cleanup temporary files
deleteDirectory($distDir);

echo "Build completed successfully!";

// Helper function to copy a directory recursively
function copyDirectory($source, $destination, $exclusions = [])
{
    $dir = opendir($source);
    @mkdir($destination);
    while (false !== ($file = readdir($dir))) {
        if ($file != '.' && $file != '..' && !in_array($file, $exclusions)) {
            if (is_dir($source . '/' . $file)) {
                copyDirectory($source . '/' . $file, $destination . '/' . $file, $exclusions);
            } else {
                copy($source . '/' . $file, $destination . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Helper function to delete a directory recursively
function deleteDirectory($dir)
{
    if (!file_exists($dir)) {
        return;
    }
    $files = array_diff(scandir($dir), ['.', '..']);
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? deleteDirectory("$dir/$file") : unlink("$dir/$file");
    }
    rmdir($dir);
}

// Helper function to zip a directory
function zipDirectory($source, $destination)
{
    $zip = new ZipArchive();
    if ($zip->open($destination, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $source = realpath($source);
        if (is_dir($source)) {
            $iterator = new RecursiveDirectoryIterator($source);
            // Skip . and .. directories
            $iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
            foreach ($files as $file) {
                $file = realpath($file);
                if (is_dir($file)) {
                    $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                } elseif (is_file($file)) {
                    $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                }
            }
        } elseif (is_file($source)) {
            $zip->addFromString(basename($source), file_get_contents($source));
        }
        $zip->close();
    }
}