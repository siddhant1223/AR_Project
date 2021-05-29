<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pass']);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
	$shopname = $_POST['sname'];
	$gst = $_POST['gst'];

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql1 = "INSERT INTO users_sellers (username, password, fname, lname, email, shopname, gstnum) VALUES ('$uname', '$pass', '$fname', '$lname', '$email', '$shopname', '$gst')";
		$sql2 = "CREATE TABLE $uname (itemID VARCHAR(10), itemname VARCHAR(50), price INT, avail_quantity INT, imglink VARCHAR(200))";
		mysqli_query($conn, $sql1);
		mysqli_query($conn, $sql2);
		$message = "Seller Registration Successful!";
		echo "<script>alert('$message');
		window.location.href='index.php';</script>";
		
	}
}
else{
	header("Location: index.php");
	exit();
}