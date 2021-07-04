<?php

session_start();


	// $username = $_POST['email'];
	// $password = $_POST['pass'];

	// $username = stripcslashes($username);
	// $password = stripcslashes($password);

	

	// $db = mysqli_connect("localhost", "root", "", "blood");


	// $result = mysqli_query($db,"select * from admin where username = '$username' and password = '$password'")
	// 				or die("Failed to query Database".mysqli_error());

	// $row = mysqli_fetch_array($result);
	// if($row['username'] == $username && $row['password'] == $password){
		
	// 	 header('location: ../homepage.php');
	// }
	// else {
	// 	echo "Failed to Login";
	// }

	if (isset($_POST['Login'])) {
		$username = $_POST['email'];
	$password = $_POST['pass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);

	

	$db = mysqli_connect("localhost", "root", "", "blood");


	$result = mysqli_query($db,"select * from admin where username = '$username' and password = '$password'")
					or die("Failed to query Database".mysqli_error());

	$row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password){
		
		 header('location: ../homepage.php');
	}
	else {
		echo "Failed to Login";
	}
	}
	else{
		header('location: ../index.html');
	}

?>