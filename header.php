<?php
$username = null; // Initialize the username variable

// Check if the user has submitted the login form
if (isset($_POST['login']) && $_POST['login'] == 1) {
    // Perform your authentication logic here
    $username = $_POST['username']; // Assuming the username is submitted via a form field
    // Validate the username and password, and perform any necessary checks
    setcookie('username', $username, time() + (86400 * 30), '/');
    header("Location: index.php");
    exit;
    // If the authentication is successful, store the username in the $username variable
    // You can use this variable wherever you want to access the username, e.g., in the header
}
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
   
    <title>Men's Boutique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/swiperJS/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/Pretty-Product-List-.css">
    <link rel="stylesheet" href="/assets/css/Ultimate-Sidebar-Menu.css">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
<header class="px-5">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="
    background-color: transparent !important; justify-content: space-between;width: 100%;">
    <a class="navbar-brand" href="/index.php" style="margin:0;">
      <img src="assets/image/logo.png" alt="logo" width="100px" height="70px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="toggleNavbar()" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#section2">Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="men1.php">Shop Now!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">About Us</a>
        </li>
        <?php
        if (isset($username)) {
          echo '<li class="nav-item">';
          echo '<div class="dropdown">';
          echo '<a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">';
          echo $username;
          echo '</a>';
          echo '<div class="dropdown-menu">';
          echo '<a class="dropdown-item" href="logout.php">Logout</a>';
          echo '</div>';
          echo '</div>';
          echo '</li>';
        } else {
          // User is not logged in, display the login link
          echo '<li class="nav-item"><a class="nav-link" href="login.php">Log-In</a></li>';
        }
        ?>
      </ul>
    </div>
  </nav>
</header>

<section class="headerbg">

</section>
