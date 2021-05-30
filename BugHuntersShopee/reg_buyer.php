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


	if (empty($uname)) {
		header("Location: registration_buyer.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: registration_buyer.php?error=Password is required");
	    exit();
	}else{
		$sql1 = "INSERT INTO users_buyers (username, password, fname, lname, email) VALUES ('$uname', '$pass', '$fname', '$lname', '$email')";
		$sql2 = "CREATE TABLE $uname (seller_uname VARCHAR(100), itemname VARCHAR(50), price INT, quantity INT)";
		mysqli_query($conn, $sql1);
		mysqli_query($conn, $sql2);
		$message = "Buyer Registration Successful!";
		echo "<script>alert('$message');
		window.location.href='index.php';</script>";
	}
}
else{
	header("Location: index.php");
	exit();
}