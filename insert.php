<?php
	include("connect.php");
	$name = $_POST['name'];
	$ic = $_POST['ic'];
	$address = $_POST['address'];
	$status = $_POST['status'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
		mysql_query("INSERT INTO user(name, ic, address, status, username, email, password) 
					 VALUES('$name', '$ic', '$address', '$status', '$username', '$email', '$password')") 
		or die ("Error inserting data into table");
		header("Location: login.php");
?>