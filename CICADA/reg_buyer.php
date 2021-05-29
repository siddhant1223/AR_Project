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
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "INSERT INTO users_buyers (username, password, fname, lname, email) VALUES ('$uname', '$pass', '$fname', '$lname', '$email')";

		$result = mysqli_query($conn, $sql);
		$message = "Buyer Registration Successful!";
		echo "<script>alert('$message');
		window.location.href='index.php';</script>";
		
	}
}
else{
	header("Location: index.php");
	exit();
}