<?php
	$host = 'localhost';
	$user = 'root';
	$pswd = '';
	
	$conn = mysql_connect($host, $user) or die ("Error connecting to MySQL");
	
	$dbname = "dinusb";
	mysql_select_db($dbname) or die ("Error connecting to Database: ".$dbname);
?>