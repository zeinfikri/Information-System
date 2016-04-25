<?php
	//Initialise the session
	session_start();
	include("connect.php");
	mysql_query("DELETE FROM user WHERE username='".$_SESSION['username']."'") or die ("Error running MySQL query");
	//Closes specified connection
	mysql_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>SIADIN</title>
	<link rel="stylesheet"href="layoutstyle.css"type="text/css">
    <style type="text/css">
	<!--
	.style4 {
		font-size: small;
		color: #000000;
	}
	.style5 {
		font-size: small;
		color: #000000;
	}
	.style6 {color: #FFFFFF}
	-->
    </style>
</head>
<link href="siadin.ico" rel='SHORTCUT ICON'/>
<body>
	<div id="wrapper">
	<div id="header">
		<h1><img align="center" src="home.png" width="100%" height="348" alt="home" longdesc="http://backhome"></h1>
	</div>
	<div id="navigation">
	<ul>
		<li><a href="index.html">Home</a></li>
	</ul>
	</div>
	<div id="content-container">
	<div id="main">
	<h2 align="center">Success to Drop</h2>
    <hr>
    <p align="center">Please Register <a href="register.html">here</a> to access our site</p>
	</div>
	<div class="style6" id="footer">
	Copyright © DinusGroupB, 2013	</div>
	</div>
</div>
</body>
</html>