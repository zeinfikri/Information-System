<?php
	//Initialise the session
	session_start();
	include("connect.php");
	$sql = "DELETE FROM enroll WHERE student='".$_SESSION['username']."' AND id='$_GET[id]'";
	$result = mysql_query($sql);
	header("Location: lesson.php");
?>