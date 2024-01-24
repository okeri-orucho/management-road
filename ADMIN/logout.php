<?php
session_start();

// Unset admin session variable
unset($_SESSION['admin']);

// Redirect to login page
header('Location: login.php');
exit();
?>
