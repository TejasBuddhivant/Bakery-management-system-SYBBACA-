<?php
include 'C:/xampp/htdocs/tejasproject/database connect/dbconnect.php';

// Function to fetch data from the database
function fetchDataFromDatabase($conn) {
    $sql = "SELECT id, name_of_customer, cake_name, mobno , address, date FROM customerlist";
    $result = $conn->query($sql);
    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

$data = fetchDataFromDatabase($conn);
$conn->close();

?>
<table>
<tr>
    <th>ID</th>
    <th>Customer Name</th>
    <th>Cake Name</th>
    <th>Mobile Number</th>
    <th>Address</th>
    <th>Date of delivary</th>
    
</tr>
<?php foreach ($data as $row): ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name_of_customer']; ?></td>
    <td><?php echo $row['cake_name']; ?></td>
    <td><?php echo $row['mobno']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['date']; ?></td>
 
</tr>
<?php endforeach; ?>
</table>