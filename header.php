<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    // User is logged in, retrieve the username from the session
    $loggedInUser = $_SESSION['username'];
    // You can use $loggedInUser wherever you want to display the username, e.g., in the header

    // Optionally, you can redirect the user to a specific page after logging in
    // header("Location: welcome.php");
    // exit; // Make sure to exit after redirecting
}
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Men's Boutique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/Pretty-Product-List-.css">
    <link rel="stylesheet" href="/assets/css/Ultimate-Sidebar-Menu.css">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header>
        <ul class="d-none d-lg-flex">
            <li> <a href="index.php">Home</a></li>
            <li><a href="index.php#section2">Our Services</a></li>
            <li><a href="men1.php">Shop Now!</a></li>
            <li><a href="#footer">About Us</a></li>
            <?php
                if (isset($_SESSION['username'])) {
                    // User is logged in, display the username
                    $loggedInUser = $_SESSION['username'];
                    echo '<li id="left-li">';
                    echo '<div class="dropdown">';
                    echo '<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                    echo $loggedInUser;
                    echo '</a>';
                    echo '<div class="dropdown-menu">';
                    echo '<a class="dropdown-item" href="logout.php">Logout</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';

                } else {
                    // User is not logged in, display the login link
                    echo '<li id="left-li"><a href="login.php">Log-In</a></li>';
                }
            ?>
        </ul>
        <div class="weblogo">
            <a href="/index.php">
            <img src="assets/image/logo.png" alt="logo" width="100px" height="70px"> 
            </a>
        </div>
     </header>
<section class="headerbg">

</section>
