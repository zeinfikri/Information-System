<?php
	session_start();
	include("connect.php");
	$student = $_SESSION['username'];
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM lesson WHERE id='$_GET[id]'";
	$result = mysql_query($sql) or
	die ("Error running MySQL query");
	$row = mysql_fetch_assoc($result);
	
	$name = $row['name'];
	$semester = $row['semester'];
	$credit = $row['credit'];
	$lecturer = $row['lecturer'];
	
		mysql_query("INSERT INTO enroll(student, id, name, semester, credit, lecturer) 
					 VALUES('$student', '$id', '$name', '$semester', '$credit', '$lecturer')") 
		or die ("Error inserting data into table");
		header("Location: lesson.php");
?>