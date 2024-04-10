<?php
session_start();
$user = $_SESSION["username"];

include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';

// Check if the form is submitted for deletion or editing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['delete'];
        // Delete the row from the database
        $sql_delete = "DELETE FROM customerlist WHERE srno='$id'";
        if ($conn->query($sql_delete) === TRUE) {
            // Refresh the page to reflect changes
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['edit'];
        $new_address = $_POST['new_address'];
        $new_mobno = $_POST['new_mobno'];
        // Update the row in the database
        $sql_update = "UPDATE customerlist SET address='$new_address', mobno='$new_mobno' WHERE srno='$id'";
        if ($conn->query($sql_update) === TRUE) {
            // Refresh the page to reflect changes
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

function fetchDataFromDatabase($conn, $user) {
    $sql = "SELECT srno, id, name_of_customer, cake_name, mobno, address, date
    FROM customerlist
    WHERE email = '$user'";
    
    $result = $conn->query($sql);
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

$data = fetchDataFromDatabase($conn, $user);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tejasproject/style.css">
    <link rel="icon" href="/tejasproject/web icon.png">
    <title>BAKERY MANAGEMENT SYSTEM</title>
    <style>
    table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        #checkbox{
            width: 26px; 
            height: 26px; 
        }
        .select{
            display: inline;
            font-size: x-large;
            
        }
        .actions {
            display: flex;
            align-items: center;
        }
        .actions input[type="checkbox"] {
            margin-right: 10px;
        }
        .actions form {
            margin-bottom: 0;
        }
        .btn {
            margin-bottom:5px;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn{
            background-color: #007bff;
            color: #fff;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        #dataContainer {
            display: none; /* Hide the container by default */
            background-color: #da4d34;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img src="/tejasproject/logo.png" alt=""  height="50px" class="logo">
        <h1>Welcome to online Bakery</h1>
        <div class="links">
            <a href="http://localhost/tejasproject/afterlogin.php" class="specificlinks">Home</a>
        </div>
    </nav>
    

    <h1><?php echo "Hello ",$user ?></h1>
   
    
    <table>
        <tr>
            <th>Customer Name</th>
            <th>Cake Name</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>Date of Delivery</th>
            <th>Payment status</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data as $row): ?>

        <tr>
            <td><?php echo $row['name_of_customer']; ?></td>
            <td><?php echo $row['cake_name']; ?></td>
            <td><?php echo $row['mobno']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $_SESSION["status"];?></td>
            <td>
                <!-- Checkbox for selecting rows -->
<label for="checkbox">

    <input type="checkbox" name="selected[]" value="<?php echo $row['srno']; ?>" id="checkbox">
    <p class="select"><b>select this row</b></p>
</label><br>
                <!-- Edit button -->
                <button id="toggleButton" class="btn">Edit the data</button>
                <div id="dataContainer">
                <form method="post">
                    <input type="hidden" name="edit" value="<?php echo $row['srno']; ?>">
                    <input type="text" name="new_address" placeholder="New Address">
                    <input type="text" name="new_mobno" placeholder="New Mobile Number">
                    <button class="btn" type="submit">Edit</button>
                </form>
    </div>
    <br>
                <!-- Delete button -->
                <form method="post">
                    <input type="hidden" name="delete" value="<?php echo $row['srno']; ?>">
                    <button class="btn" type="submit">Delete the Order</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <script>
        // Get the button and data container elements
        var toggleButton = document.getElementById('toggleButton');
        var dataContainer = document.getElementById('dataContainer');

        // Add event listener to the button
        toggleButton.addEventListener('click', function() {
            // Toggle the visibility of the data container
            if (dataContainer.style.display === 'none') {
                dataContainer.style.display = 'block'; // Display the container
            } else {
                dataContainer.style.display = 'none'; // Hide the container
            }
        });
    </script>
</body>
</html>
