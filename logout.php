<?php
session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;
$_SESSION['cakename'] = $cakename;
$_SESSION["status"];
$_SESSION['user'] = $user;
session_destroy();
header("location: /tejasproject/index.php");
exit;
?>