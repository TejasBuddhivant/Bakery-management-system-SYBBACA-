<?php

session_start();
$user=$_SESSION['Adminlogged'];
if(!isset($user)){
    header ("location:http://localhost/tejasproject/admin/adminlogin.php");
}
?>

<?php
include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';
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
// Function to fetch data from the database
function fetchDataFromDatabase($conn) {
    $sql = "SELECT * FROM customerlist";
    
    
    $result = $conn->query($sql);
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}
$statuss="completed";
$data = fetchDataFromDatabase($conn);
// $conn->close();

?>

<?php

function fetchDataFromDatabase2($conn) {
    $sql = "SELECT 	* FROM chefsinfo";
    
    
    $result1 = $conn->query($sql);
    $data1 = array();

    if ($result1->num_rows > 0) {
        while ($row1 = $result1->fetch_assoc()) {
            $data1[] = $row1;
        }
    }
    return $data1;
}

    // Check if the form has been submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['delete1'])) {
            $id1 = $_POST['delete1'];
            
            // Delete the row from the database
            $sql_delete1 = "DELETE FROM chefsinfo WHERE csrno='$id1'";
            $sql_alter ="ALTER TABLE chefsinfo AUTO_INCREMENT = 1;";
            if ($conn->query($sql_delete1) === TRUE) {
                // Refresh the page to reflect changes
                header("Location: ".$_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        } elseif (isset($_POST['add'])) {
        $chefsname = $_POST['chefsname'];
        $country = $_POST['country'];
        $mobile_no = $_POST['mobile_no'];
        $speciality = $_POST['speciality'];
            // Update the row in the database
            $sql1= "INSERT INTO chefsinfo (chefsname, country, mobile_no, speciality) VALUES ('$chefsname', '$country', '$mobile_no', '$speciality')";

            if ($conn->query($sql1) === TRUE) {
                // Refresh the page to reflect changes
                header("Location:".$_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
    
$data1 = fetchDataFromDatabase2($conn);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Admin Page</title>
       
         <!-- CSS only -->
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background-image: url("/tejasproject/svg-pattern-topography.svg");
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            color: #f5f5f5;
            padding: 10px 20px;
        }
        .logo {
            margin-left: 20px;
        }
        #admin-logo {
            margin-right: 20px;
            cursor: pointer;
        }
        #admin-logo:hover {
            opacity: 0.8;
        }
        h1 {
            font-size: 24px;
            margin: 0;
        }
        .logout-button {
            background: none;
            border: none;
            color: #f5f5f5;
            font-size: 16px;
            cursor: pointer;
            padding: 5px 10px;
        }
        .logout-button:hover {
            opacity: 0.8;
        }
        p{
            display: inline;
        }
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }
            h3 {
                font-style: italic;
                font-weight: bold;
                color: #333;
            }
            .menu-container {
                width: 300px;
                margin: 50px auto;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            .tlink, .link {
                margin-bottom: 10px;
            }
            .tlink a, .link a {
                text-decoration: none;
                color: #333;
                display: block;
                padding: 10px 15px;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }
            .tlink a:hover, .link a:hover {
                background-color: #f0f0f0;
            }    
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }
            h3 {
                font-style: italic;
                font-weight: bold;
                text-align: center;
                font-size: xx-large;
                color: #333;
            }
            .menu-container {
                width: 300px;
                margin: 50px auto;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            #tlink, #link {
                margin-bottom: 10px;
                font-size: xx-large;
                text-align: center;
                align-items: center;
                justify-content: center;
            }
            #link button {
                text-decoration: none;
                border: 0px;
                color: #333;
                background-color: transparent;
                display: block;
                font-size: xx-large;
                margin-left: 400px;
                padding: 10px 250px;
                align-items: center;
                
                transition: background-color 0.3s ease;
            }
            #tlink button {
                text-decoration: none;
                border: 0px;
                color: #333;
                background-color: transparent;
                display: block;
                font-size: xx-large;
                margin-left: 430px;
                padding: 10px 230px;
                align-items: center;
                
                transition: background-color 0.3s ease;
            }
            #tlink button:hover, #link button:hover {
                background-color: #f0f0f0;
                border: 2px solid black;
            }

            table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #0000009f;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f0f0f0b6;
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
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
        }
        /* input[type="text"].address {
            width: 300px;
            height:100px; 
            /* padding: 100px;  */
   

    .formm{
        width: 300px; /* Adjust width as needed */
        margin: 0 auto;
        display:inline;
       
    }

    .labble {
        display: block;
        margin-bottom: 5px;
    }

    .inputter{
        width: calc(100% - 10px);
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .sub{
        width: 100%;
        padding: 10px;
        background-color: #FF6347;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .sub:hover {
        background-color: #da4d34;
    }
        </style>
    <link rel="icon" href="/tejasproject/web icon.png">

                    </head>
                    <body>
                        <nav class="navbar">
                            <img src="/tejasproject/logo.png" alt="Logo" height="50px" class="logo">
                            <h1>Welcome  Admin</h1>


                            <a href="http://localhost/tejasproject/admin/logout1.php"><img src="./icon.svg" alt="Admin" height="30px" id="admin-logo" title="Log Out"></a>
                        </nav>
                        <h3><i><b>Admin menu</b></i></h3>

<div id="tlink">
    <button id="showDataBtn">Customer List</button>
</div>

<div id="dataTable" style="display: none;">

<table>
<tr>
    <th>ID</th>
    <th>Customer Name</th>
    <th>Cake Name</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Date of delivary</th>
    <th>Payment Status</th>
    <th>Edit Option</th>
    
</tr>
<?php foreach ($data as $row): ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name_of_customer']; ?></td>
    <td><?php echo $row['cake_name']; ?></td>
    <td><?php echo $row['mobno']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $statuss; ?></td>
 
<td>
<label for="checkbox">

    <input type="checkbox" name="selected[]" value="<?php echo $row['srno']; ?>" id="checkbox">
    <p class="select"><b>select this row</b></p>
</label><br>
                <!-- Edit button -->
                <button id="toggleButton" class="btn">Edit the data</button>
                <div id="dataContainer">
                <form method="post">
                    <input type="hidden" name="edit" value="<?php echo $row['srno']; ?>">
                    <input type="text" name="new_mobno" placeholder="New Mobile Number">
                    <br><br>
                    <input type="text" name="new_address" placeholder="New Address" rows="4" cols="50">
                    <br><br>
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
</div>
<script>
    document.getElementById("showDataBtn").addEventListener("click", function() {
        var table = document.getElementById("dataTable");
        if (table.style.display === "none") {
            table.style.display = "block";
        } else {
            table.style.display = "none";
        }
    });
</script>


<!-- this is for chefs table -->

<div id="tlink">
    <button id="showData">Chefs Information</button>
</div>

<div id="data" style="display: none;">
<table>
<tr>
    <th>ID</th>
    <th>Chefs Name</th>
    <th>Country Name</th>
    <th>Mobile Number</th>
    <th>Speciality</th>
    <th>Edit Option</th>
</tr>
<?php foreach ($data1 as $row1): ?>
<tr>
    <td><?php echo $row1['csrno']; ?></td>
    <td><?php echo $row1['chefsname']; ?></td>
    <td><?php echo $row1['country']; ?></td>
    <td><?php echo $row1['mobile_no']; ?></td>
    <td><?php echo $row1['speciality']; ?></td>
    <td>   
    <form method="post">
                    <input type="hidden" name="delete1" value="<?php echo $row1['csrno']; ?>">
                    <button class="btn" type="submit">Delete the Chef</button>
                </form>
            </td>
        <?php endforeach; ?>
    </table>

    <h2 style="text-align: center;"><b>ADD NEW CHEF</b></h2>
        <form method="post" class="formm">
            <label for="chefsname" class="labble">Chef's Name:</label>
            <input type="text" name="chefsname" class="inputter" required><br>
            
            <label for="country" class="labble">Country:</label>
            <input type="text" name="country" class="inputter" required><br>
            
            <label for="mobile_no" class="labble">Mobile Number:</label>
            <input type="text" name="mobile_no" class="inputter" required><br>
            
            <label for="speciality" class="labble">Speciality:</label>
            <input type="text" name="speciality" class="inputter" required><br>
            
            <input type="submit" name="add" value="Add Chef" class="sub">
        </form>
 
</div>
    
<script>
    document.getElementById("showData").addEventListener("click", function() {
        var table = document.getElementById("data");
        if (table.style.display === "none") {
            table.style.display = "block";
        } else {
            table.style.display = "none";
        }
    });
</script>

</body>
</html>
