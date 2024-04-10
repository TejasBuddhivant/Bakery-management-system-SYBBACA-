<?php

session_start();

$login= false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';
  $email = $_POST["username"];
  $password = $_POST["password"];
  

   
        $sql = "SELECT * FROM `user` WHERE email='$email' AND passward='$password'";
        $result = mysqli_query($conn, $sql);
        $num= mysqli_num_rows($result);
        // if($username=='admin'&& $password=='Pass@123'){
        //   $login=true;
        //   session_start();
        //   $_SESSION['loggedin'] = true;
        //   $_SESSION['username'] = $username;
        //   header ("location:http://localhost/tejasproject/admin/index.php");
        // echo '<script>window.location.href = "/tejasproject/admin/index.php";</script>';

          
        }
      if ($num == 1) {
        echo '<script>window.location.href = "/tejasproject/afterlogin.php";</script>';
        // header ("location:/tejasproject/index.html");
        $login=true;
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $email;
        // echo"login successfuly";
      }
    
    else{
        echo "Passwords do not match";
    }
  
?>