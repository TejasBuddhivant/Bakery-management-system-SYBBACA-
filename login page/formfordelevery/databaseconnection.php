<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
    echo"data base connection establish";

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $sno =$_POST['sno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mno = $_POST['phone'];
    
    $sql ="INSERT INTO `tejas`.`test` (`srno`, `name`, `email`, `mobilno`) VALUES ('$sno', '$name', '$email', '$mno');";


    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // // Close the database connection
    $con->close();
}

    ?> 
   