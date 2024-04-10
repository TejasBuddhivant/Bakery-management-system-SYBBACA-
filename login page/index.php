<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/tejasproject/web icon.png">

</head>
<body>
    <div class="wrapper">
        <form action="http://localhost/tejasproject/login page/rejister.php" method="post">
            <h2>Login</h2>
            <div class="input-group">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="email" placeholder="Email id" name="username" required>
            </div>
            <div class="input-group">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" placeholder="Password" name="password" required>
            </div>
           
            <button type="submit" class="btn">Login</button>
            <div class="sign-link">
                <p>Don't have an account? <a href="http://localhost/tejasproject/login page/formfordelevery/form1.php" class="register-link">Register</a></p>
            </div>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>