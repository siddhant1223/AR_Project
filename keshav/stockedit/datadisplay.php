<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table{
    border: 2px solid black;
    width: 100%;
    color: #000000;
    font-family: monospace;
    font-size: 20px;
    text-align: left;
}
th {
    border: 2px solid black;  
    background-color: #2b3cc2;
    color: white;
}
td{
    border: 2px solid black;
}
tr:nth-child(even) {background-color: #dae6f5}
</style>
</head>
<body>
<table>
<tr>
<th>Item ID</th>
<th>Item Name</th>
<th>Price/kg</th>
<th>Available Quantity</th>
</tr>
<?php
include "db_conn.php";
$user = $_SESSION['username'];
$sql = "SELECT * FROM $user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["itemID"]. "</td><td>" . $row["itemname"] . "</td><td>" . $row["price"] . "</td><td>"
        . $row["avail_quantity"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>