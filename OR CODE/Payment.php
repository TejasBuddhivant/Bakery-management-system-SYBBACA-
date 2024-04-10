<?php
session_start();

$_SESSION["status"] = "complete";
include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';
ob_start();
include 'C:/xampp/htdocs/tejasproject/index.php';
$html_content = ob_get_clean(); 


$username = $_SESSION["username"];
$cakename= $_SESSION["cakename"];
$stmt = $conn->prepare("SELECT * FROM user WHERE email = '$username'");

$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
   // Fetch the row
   $row = $result->fetch_assoc();

   $stored_srno = $row['srno'];
   $stored_name = $row['name'];
   $stored_mobileno = $row['mobileno'];
   $stored_address = $row['address'];
   $sql ="INSERT INTO `customerlist` ( `id`, `name_of_customer`,`email`, `cake_name`, `mobno`, `address`) VALUES ('$stored_srno', '$stored_name ','$username', '$cakename', '$stored_mobileno', '$stored_address');";
   $result = mysqli_query($conn, $sql);

   if ($result){
      
      echo "<h1>Hello, $stored_name! Make a payment to complete the order !!! </h1> <br> ";

   }
} else {
   echo "<p>No matching row found for username: $stored_name</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/tejasproject/web icon.png">
    <title>Payment Gateway</title>
    <style>
        .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .step {
            margin-bottom: 10px;
        }
        .step-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            line-height: 30px;
            margin-right: 10px;
        }
    </style>
    <link rel="icon" href="/tejasproject/web icon.png">

</head>
<body>
    <div class="card">
    <p id="timer" style="text-align: center;"></p>
        <div class="step">
            <div class="step-icon">1</div> Open Google Scan
        </div>
        <div class="step">
            <div class="step-icon">2</div> Take a photo and go to link
        </div>
        <div class="step">
            <div class="step-icon">3</div> Complete payment
        </div>
        <img src="placed_order.png" alt="Payment Complete" style="max-width: 100%; margin-top: 20px;">
        
    </div>

<script>
    
        var timeLimitInSeconds = 60;

       
        var currentTime = new Date().getTime();
        var redirectTime = currentTime + (timeLimitInSeconds * 1000);

      
        var timer = setInterval(function() {
            var now = new Date().getTime();
            var timeRemaining = redirectTime - now;

            
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        
            document.getElementById("timer").innerHTML = "Session ends in " + seconds + " seconds...";

            
            if (timeRemaining <= 0) {
                clearInterval(timer);
                window.location.href = "http://localhost/tejasproject/afterlogin.php";
                alert('Your payment process time has ended.');
            }
        }, 1000); 
    </script>
</body>
</html>
