<?php
include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo '<script>alert("Login first");</script>';
   header("location: http://localhost/tejasproject/login page/index.php");

   exit;
}


$status="incomplete";
$username = $_SESSION["username"];
$stmt = $conn->prepare("SELECT * FROM user WHERE email = '$username'");

$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
   // Fetch the row
   $row = $result->fetch_assoc();
   // $cakename=$_POST['choco_fudge'];
   if($_POST['choco_fudge']=='Chocolate Cake'){
       $cakename='ChocolateFudgeCake';
       $price= 399;
   }else if($_POST['choco_fudge']=='venilla Cake'){
       $cakename='venilla Cake';
       $price= 599;

   }
   else if($_POST['choco_fudge']=='Chocolate Lava Cake'){
       $cakename='Chocolate Lava Cake';
       $price= 799;

   }
   else if($_POST['choco_fudge']=='Red Velvet Anivarcery Cake'){
       $cakename='Red Velvet Anivarcery Cake';
       $price= 299;

   }
   else if($_POST['choco_fudge']=='Wedding Anivarcery Cake'){
       $cakename='Wedding Anivarcery Cake';
       $price= 999;

   }
   else if($_POST['choco_fudge']=='Black Forest Panda cake'){
       $cakename='Black Forest Panda cake';
       $price= 499;

   }
   // Access the data from the row
   $stored_srno = $row['srno'];
   $stored_name = $row['name'];
   $stored_mobileno = $row['mobileno'];
   $stored_address = $row['address'];
   $_SESSION['cakename'] = $cakename;
//    $sql ="INSERT INTO `customerlist` ( `id`, `name_of_customer`, `cake_name`, `mobno`, `address`) VALUES ('$stored_srno', '$stored_name ', '$cakename', '$stored_mobileno', '$stored_address');";
//    $result = mysqli_query($conn, $sql);

//    if ($result){
      
//       echo "<h1>Hello, $username! Your Order Placed Succesfully !!! </h1> <br>";

//    }
} else {
   echo "<p>No matching row found for username: $username</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="icon" href="/tejasproject/web icon.png">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background-image: url(./svg-pattern-topography.svg);
        }

        .navbar {
            display: flex;
            align-items: center;
            background-color: black;
            color: #f5f5f5;
            text-align: center;
            padding: 10px;
        }

        .logo {
            margin-right: auto;
        }

        h1 {
            font-size: 35px;
            text-align: center;
            margin: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .print-button {
            text-align: center;
            margin-top: 20px;
        }

        .print-button button ,.print-button a{
            padding: 10px 20px;
            background-color: #FF6347;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            text-decoration:none;
            transition: background-color 0.3s;
        }

        .print-button button:hover ,.print-button a:hover {
            background-color: #da4d34;
        }
        @media print {
            .print-button {
                display: none;
            }
            
           
            a::after {
                content: none !important;
            }
            
            time {
                display: none !important;
            }
        }

        .container {
            font-size: 20px;
            display:inline;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img src="./logo.png" alt="Logo" height="50px" class="logo">
        <h1>Welcome to online Bakery</h1>
    </nav>

    <div class="container">
        <h2>Order Bill</h2>
        
        <h3>Order Details</h3>
        <table>
            <tbody>
                <tr>
                    <td>User no</td>
                    <td><?php echo $stored_srno; ?></td>
                </tr>
                <tr>
                    <td>Order Placed By</td>
                    <td><?php echo $stored_name; ?></td>
                </tr>
                <tr>
                    <td>Mobile number</td>
                    <td><?php echo $stored_mobileno; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $stored_address; ?></td>
                </tr>
                <tr>
                    <td>Cake Name</td>
                    <td><?php echo $cakename;?></td>
                </tr>
                <tr>
                    <td>Cake Price</td>
                    <td><?php echo "₹".$price; ?></td>
                </tr>
                <tr>
                    <td>Payment Status</td>
                    <td><?php echo $status; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="print-button">

            <button onclick="window.print()">Print</button>
            <a href="http://localhost/tejasproject/afterlogin.php" >Cancle</a>
            <a href="http://localhost/tejasproject/OR CODE/Payment.php" >Procced to Payment</a>
        </div>
    </div>
</body>
</html>