
<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['itemID'])){

    $user = $_SESSION['username'];
	$type = $_POST['itemtype'];
    $itemid = $_POST['itemID'];
    $itemname = $_POST['itemname'];
    $quantity = $_POST['availquantity'];
    $price =  $_POST['price'];
    $link = $_POST['imglink'];

    if($type==1){
        $sql = "SELECT * FROM $user WHERE itemID='$itemid'";
        $res = $conn->query($sql);
    }

	if (empty($itemid)) {
		header("Location: seller.php?error=Item ID is required");
	    exit();
    }elseif($result->num_rows != 0){
        header("Location: seller.php?error=Item ID is not unique");
	    exit();
	}else{
		$sql1 = "INSERT INTO $user (itemID, itemname, price, avail_quantity, imglink) VALUES ('$itemid', '$itemname', '$price', '$quantity', '$link')";
		$sql2 = "UPDATE $user SET price = '$price', avail_quantity = '$quantity' WHERE itemID='$itemid'";
        if($type==1){
            mysqli_query($conn, $sql1);
        }
        else{
            mysqli_query($conn, $sql2);
        }
		$message = "Stock Edit Successful! $result->num_rows";
		echo "<script>alert('$message');
		window.location.href='seller.php';</script>";
	}
}else{
	header("Location: index.php");
	exit();
}