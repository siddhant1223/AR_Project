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
	$usertype = $_POST['usertype'];
	if (empty($uname)) {
		$message = "Username is required!";
		echo "<script>alert('$message');
		window.location.href='index.php';</script>";
	    exit();
	}else if(empty($pass)){
        $message = "Password is required!";
		echo "<script>alert('$message');
		window.location.href='index.php';</script>";
	    exit();
	}else{
		$sql = "SELECT * FROM $usertype WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
				if($usertype == 'users_buyers'){
            		header("Location: ./buyer/buyer.php");
				}
				else{
					header("Location: ./stockedit/seller.php");
				}
		        exit();
            }else{
				$message = "Invalid Username or Password";
				echo "<script>alert('$message');
				window.location.href='index.php';</script>";
		        exit();
			}
		}else{
			$message = "Invalid Username or Password";
			echo "<script>alert('$message');
			window.location.href='index.php';</script>";
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}