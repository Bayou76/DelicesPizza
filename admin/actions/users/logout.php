<?php
session_start();

// Unset all session variables and destroy the session
$_SESSION = array();
session_destroy();

// Redirect the user to the login page
header("Location: ../../index.php");
exit();