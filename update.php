<?php
	//Initialise the session
	session_start();
	include("connect.php");
	$name = $_POST['name'];
	$ic = $_POST['ic'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "UPDATE user SET name='".$name."', 
							ic='".$ic."', 
							address='".$address."', 
							username='".$username."', 
							email='".$email."', 
							password='".$password."' 
						WHERE username='".$_SESSION['username']."'";
	$result = mysql_query($sql) or die ("Error running MySQL query");
	header("Location: myprofile.php");

	//Closes specified connection
	mysql_close($conn);
?>