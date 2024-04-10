<?php

$login= false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';
  $user = $_POST["user"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM `admin` WHERE user='$user' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num= mysqli_num_rows($result);
        if($user=='Admin'&& $password=='1idiot$412301'){
          session_start();
          $login=true;
          $_SESSION['Adminlogged'] = $login;
          $_SESSION['admin'] = $user;
          header ("location:http://localhost/tejasproject/admin/index.php");
        }
    }
        ?>
        