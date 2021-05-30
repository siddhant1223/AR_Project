<?php 
session_start();
include "db_conn.php";

if (isset($_POST['quantity'])){
    $itemid = $_POST['itemid'];
    $user = $_SESSION['username'];
    $seller = 'seller1';
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];;
    $itemname = $_POST['itemname'];
    $sql = "INSERT INTO $user (seller_uname, itemname, price, quantity) VALUES ('$seller', '$itemname', '$price', '$quantity')";
    $res = $conn->query($sql);
    $message = "Item Added to Cart!";
    echo "<script>alert('$message');
    window.location.href='buyer.php';</script>";
    
}