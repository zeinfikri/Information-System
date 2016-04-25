<?php
	//Initialise the session
	session_start();
	include("connect.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$semester = $_POST['semester'];
	$credit = $_POST['credit'];
	
	$sql = "UPDATE lesson SET id='".$id."', 
							name='".$name."', 
							semester='".$semester."', 
							credit='".$credit."'  
						WHERE id='$_POST[id]'";
	$result = mysql_query($sql) or die ("Error running MySQL query");
	header("Location: lesson.php");

	//Closes specified connection
	mysql_close($conn);
?>