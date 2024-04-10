<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f3f3f3;
}

.login-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.login-form {
    max-width: 300px;
    margin: 0 auto;
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
    margin-right:20px
}

.form-group label {
    display: block;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form"  action="http://localhost/tejasproject/admin/validate.php" method="post">
            <h2>Admin Login</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="user" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php

// $login= false;
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//   include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';
//   $user = $_POST["user"];
//   $password = $_POST["password"];
//   $sql = "SELECT * FROM `admin` WHERE user='$user' AND password='$password'";
//         $result = mysqli_query($conn, $sql);
//         $num= mysqli_num_rows($result);
//         if($user=='Admin'&& $password=='1idiot$412301'){
//           $login=true;
//           session_start();
//           $_SESSION['loggedin'] = true;
//           $_SESSION['user'] = $user;
//           header ("location:http://localhost/tejasproject/admin/index.php");
//         }
//     }
        ?> 
        