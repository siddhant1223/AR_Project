<?php 
session_start();
include "db_conn.php";

    $user = $_SESSION['username'];
    $seller = 'seller1';
    $sql1 = "SELECT * FROM $user";
    $sql2 = "DELETE FROM $user";
    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()){
        $n = $row['quantity'];
        $name = $row['itemname'];
        $updsql = "UPDATE seller1 SET avail_quantity = IF(avail_quantity-$n>0 ,avail_quantity-$n, 0)  WHERE itemname='$name'";
        $update = $conn->query($updsql);
    }
    $res = $conn->query($sql2);
    $message = "Checkout Successful!";
    echo "<script>alert('$message');
    window.location.href='buyer.php';</script>";
    