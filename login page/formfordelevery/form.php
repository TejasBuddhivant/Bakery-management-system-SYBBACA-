<?php
include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        // $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";

        $sql = "INSERT INTO `user` ( `name`, `email`, `mobileno`, `address`, `username`, `passward`, `date`) VALUES ('$name', '$email', '$mobile', '$address', '$username', '$password', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header ("location: http://localhost/tejasproject/login page/index.php");

        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
?>