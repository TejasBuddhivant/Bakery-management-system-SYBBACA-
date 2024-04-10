<?php
// logout.php
session_start();
$_SESSION['Adminlogged'] = true;
$_SESSION['admin'] = $user;

session_destroy();

// Redirect to login page or any other page after logout
header("Location: http://localhost/tejasproject/admin/adminlogin.php");
exit;
?>