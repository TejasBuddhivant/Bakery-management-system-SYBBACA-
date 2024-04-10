<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/tejasproject/web icon.png">

    <title>Registration Form</title>
</head>
<body>
    <nav class="navbar">
        <img src="/logo.png" alt=""  height="50px" class="logo">
        <h1>Welcome to online Bakery</h1>
        <div class="links">
        <a href="http://localhost/tejasproject/About us/Aboutus.php" class="specificlinks">About us</a>

                <a href="http://localhost/tejasproject/index.php" class="specificlinks">Home</a>
                <a href="http://localhost/tejasproject/login page/index.php" class="specificlinks">Login here</a>
            </div>
        </nav>
    
    <form method="post" action="http://localhost/tejasproject/login page/formfordelevery/form.php">
        <h2>Registration Form</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" required><br>

        <label for="address">Address:</label>
        <textarea name="address" rows="5" cols="100" required></textarea><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="password">Confirm Password:</label>
        <input type="password" name="cpassword" required><br>

        <input type="submit" value="Register">
    </form>

</body>
</html>