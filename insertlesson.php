<?php
	session_start();
	include("connect.php");
	$lecturer = $_SESSION['username'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$semester = $_POST['semester'];
	$credit = $_POST['credit'];
	
		mysql_query("INSERT INTO lesson(lecturer, id, name, semester, credit) 
					 VALUES('$lecturer', '$id', '$name', '$semester', '$credit')") 
		or die ("Error inserting data into table");
		header("Location: lesson.php");
?>