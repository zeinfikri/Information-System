<?php
	//Initialise the session
	session_start();
	include("connect.php");
	$sql = "DELETE FROM lesson WHERE lecturer='".$_SESSION['username']."' AND id='$_GET[id]'";
	$result = mysql_query($sql);
	header("Location: lesson.php");	
?>