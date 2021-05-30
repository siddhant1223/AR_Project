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
tr:nth-child(even) {background-color: #dae6f5}
</style>
</head>
<body>
<table>
<tr>
<th>Item Name</th>
<th>Quantity</th>
<th>Price</th>
</tr>
<?php
include "db_conn.php";
session_start();
$user = $_SESSION['username'];
$sql = "SELECT * FROM $user";
$totalres = $conn->query("SELECT SUM(quantity) AS totalquantity, SUM(quantity*price) AS totalbill FROM $user");
$row = $totalres->fetch_assoc();
$total_quantity = $row['totalquantity'];
$total_price = $row['totalbill'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["itemname"]. "</td><td>" . $row["quantity"] . "</td><td>" . $row["price"] . "</td><tr>";
    }
    echo "<tr><td><br></td><td><br></td><td><br></td><tr>";
    echo "<tr><td><b>Total : </b></td><td><b>" . $total_quantity . "</td><td><b>" . $total_price . "</td><tr>";
    echo "</table>";
    } 
?>
<center><h2><a href="checkout.php">Checkout</a></h2>
</table>
</body>
</html>