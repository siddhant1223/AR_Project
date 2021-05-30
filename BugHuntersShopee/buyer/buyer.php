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
<th>AR Image</th>
</tr>

<?php 
session_start();
include "db_conn.php";

function getprice($itemid){
    $sql = "SELECT price FROM seller1 WHERE itemID='$itemid'";  
    $conn = new mysqli("localhost", "vishesh147", "vishesh147", "argroceryshopping");  
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['price'];
}

function getquantity($itemid){
    $sql = "SELECT avail_quantity FROM seller1 WHERE itemID='$itemid'";
    $conn = new mysqli("localhost", "vishesh147", "vishesh147", "argroceryshopping");    
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['avail_quantity'];
}

function getlink($itemid){
    $sql = "SELECT imglink FROM seller1 WHERE itemID='$itemid'";
    $conn = new mysqli("localhost", "vishesh147", "vishesh147", "argroceryshopping");    
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['imglink'];
}


$user = $_SESSION['username'];
$sql = "SELECT * FROM seller1";

$result = $conn->query($sql);

$itemid = '101';
echo "<tr><td>" . $itemid . "</td><td>" . '<h3>Oranges</h3>' . "</td><td>" . getprice($itemid) . "</td><td>"
.getquantity($itemid).'<form action="addtocart.php" method="post">
	<label class="description"><font size = "4">Enter Quantity</font> </label>
    <input id="availquant" name="quantity" type="number" max="'.getquantity($itemid).'"> 
    <input type = "hidden" name="itemid" value="$itemid" id="item_id">
    <input type = "hidden" name="price" value="'. getprice($itemid) .'" id="price">
    <input type = "hidden" name="itemname" value="Oranges" id="name">
    <button type="submit"><strong>Add to Cart</strong></button></form>'. "</td><td><a href='".getlink($itemid) ."'>Orange Model<a></td></tr>";
$itemid = '201';
echo "<tr><td>" . $itemid . "</td><td>" . '<h3>Onions</h3>' . "</td><td>" . getprice($itemid) . "</td><td>"
.getquantity($itemid).'<form action="addtocart.php" method="post">
	<label class="description"><font size = "4">Enter Quantity</font> </label>
    <input id="availquant" name="quantity" type="number" max="'.getquantity($itemid).'"> 
    <input type = "hidden" name="itemid" value="$itemid" id="item_id">
    <input type = "hidden" name="price" value="'. getprice($itemid) .'" id="price">
    <input type = "hidden" name="itemname" value="Mangoes" id="name">
    <button type="submit"><strong>Add to Cart</strong></button></form>'. "</td><td><a href='".getlink($itemid) ."'>Onions Model<a></td></tr>";
$itemid = '301';
echo "<tr><td>" . $itemid . "</td><td>" . '<h3>Apples</h3>' . "</td><td>" . getprice($itemid) . "</td><td>"
.getquantity($itemid).'<form action="addtocart.php" method="post">
	<label class="description"><font size = "4">Enter Quantity</font> </label>
    <input id="availquant" name="quantity" type="number" max="'.getquantity($itemid).'"> 
    <input type = "hidden" name="itemid" value="$itemid" id="item_id">
    <input type = "hidden" name="price" value="'. getprice($itemid) .'" id="price">
    <input type = "hidden" name="itemname" value="Apples" id="name">
    <button type="submit"><strong>Add to Cart</strong></button></form>'. "</td><td><a href='".getlink($itemid) ."'>Apple Model<a></td></tr>";

$itemid = '401';
echo "<tr><td>" . $itemid . "</td><td>" . '<h3>Watermelon</h3>' . "</td><td>" . getprice($itemid) . "</td><td>"
.getquantity($itemid).'<form action="addtocart.php" method="post">
	<label class="description"><font size = "4">Enter Quantity</font> </label>
    <input id="availquant" name="quantity" type="number" max="'.getquantity($itemid).'"> 
    <input type = "hidden" name="itemid" value="$itemid" id="item_id">
    <input type = "hidden" name="price" value="'. getprice($itemid) .'" id="price">
    <input type = "hidden" name="itemname" value="Watermelon" id="name">
    <button type="submit"><strong>Add to Cart</strong></button></form>'. "</td><td><a href='".getlink($itemid)."'>Watermelon Model<a></td></tr>";
$itemid = '501';
echo "<tr><td>" . $itemid . "</td><td>" . '<h3>Bananas</h3>' . "</td><td>" . getprice($itemid) . "</td><td>"
.getquantity($itemid).'<form action="addtocart.php" method="post">
	<label class="description"><font size = "4">Enter Quantity</font> </label>
    <input id="availquant" name="quantity" type="number" max="'.getquantity($itemid).'"> 
    <input type = "hidden" name="itemid" value="$itemid" id="item_id">
    <input type = "hidden" name="price" value="'. getprice($itemid) .'" id="price">
    <input type = "hidden" name="itemname" value="Bananas" id="name">
    <button type="submit"><strong>Add to Cart</strong></button></form>'. "</td><td><a href='".getlink($itemid)."'>Banana Model<a></td></tr>";

echo "</table>";
?>
</table>
<center><h2><a href="viewcart.php">View Cart</a></h2>
</body>
</html>