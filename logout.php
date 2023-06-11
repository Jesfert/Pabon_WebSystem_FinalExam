<?php
session_start();

// Destroy the session and unset all session variables
session_destroy();
$_SESSION = array();

// Redirect the user to the login page or any other desired page
header("Location: index.php");
exit;
?>
