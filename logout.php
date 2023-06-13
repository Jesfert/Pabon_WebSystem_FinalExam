<?php
$username = null; 

// Clear all cookies
foreach ($_COOKIE as $cookieName => $cookieValue) {
    setcookie($cookieName, '', time() - 3600, '/');
}

header("Location: index.php");
exit;
?>
