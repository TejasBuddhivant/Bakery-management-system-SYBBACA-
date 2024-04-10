<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/tejasproject/web icon.png">
    <title>Document</title>
    <style>
 body{
  font-family: Arial, sans-serif;

    margin: 0px;
    padding: 0px;
    background-color: #f5f5f5;
    background-image:url(./svg-pattern-topography.svg);
    
}
.navbar{
    display: flex;
    justify-content: center;
    align-items: center;
    justify-content: space-between;
    background-color: black;
    color: #f5f5f5;
    text-align: center;

}
.logo{
    justify-content: start;
}
.links{
    display: flex;
    justify-content: end;
}
.specificlinks{
    background-color: black;
    border: 0px;
    display: flex;
    margin-right: 70px;
    color: #f5f5f5;
    text-decoration: none;
    font-size: larger;
    padding: 15px;
}
.specificlinks:hover{
    border-radius: 5px;
    border: 2px solid whitesmoke;
   background-color: rgba(167, 167, 167, 0.659);
}
h1{
    font-size:  35px;
    /* margin-left: 200px; */
    align-items: center;
}
p{
    transition: text-shadow 1s ease-in-out, color 1s ease-in-out;
    text-shadow: none;
}
p:hover{
  
    color: black; 
            transition-delay: 0.1s; 
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);

}

/* this is end of nav bar this can use in all over  the page */
#main{
    margin-top: 150px;
    justify-content:  center;
    font-size: 50px;
    text-align: center;
}
    
      </style>
      </head>
      <body>
        <nav class="navbar">
            <img src="/tejasproject/logo.png" alt=""  height="50px" class="logo">
            <h1>Welcome to online Bakery</h1>
            <div class="links">
                   
                <a href="http://localhost/tejasproject/index.php" class="specificlinks">Home</a>
                    <a href="http://localhost/tejasproject/login page/formfordelevery/form1.php" class="specificlinks">Sign up</a>
                    <a href="http://localhost/tejasproject/login page/index.php" class="specificlinks">Login here</a>
                </div>
    </nav>
      
    <div id="main">

        <h1>BAKERY MANAGEMENT SYSTEM</h1>
        <br>
        <p>Name: Tejas Ganesh Buddhivant</p>
        <br>
            <p>Roll No: 210 </p>
            <br>
            <p>College: A.M. College </p>
            <br>
            <p>Project Teacher: Prof. Asha Mane </p>
        </div>
      
      </div>
      </body>
      </html>