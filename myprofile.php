<html>
<head>
	<title>SIADIN</title>
	<link rel="stylesheet"href="layoutstyle_2.css"type="text/css">
    <style type="text/css">
<!--
.style5 {color: #FFFFFF}
.style7 {
	font-size: large
}
.style8 {font-size: x-large; }
.style9 {color: #000000}
-->
    </style>
	<script type="text/javascript" src="dropconfirm.js"></script>
</head>
<link href="siadin.ico" rel='SHORTCUT ICON'/>
<body>
	<div id="wrapper">
	<div id="header">
		<h1><img align="center" src="home.png" width="100%" height="348" alt="home" longdesc="http://backhome"></h1>
	</div>
	<div id="navigation">
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="lesson.php">Lessons</a></li>
		<li><a href="lecture.html">Lecturer</a></li>
	</ul>
	</div>
	<div id="content-container">
	<div id="main">
	<h2 class="style9">My Profile</h2>
	<hr />
	<?php
		//Initialise the session
		session_start();
		include("connect.php");
		$sql = "SELECT * FROM user WHERE username='".$_SESSION['username']."'";
		$result = mysql_query($sql) or
		die ("Error running MySQL query");
		//Fetches a result row as an associative array
		while($data = mysql_fetch_array($result))
		{
			echo "<table>";
			echo "<tr><td>Name</td><td> :</td><td> $data[name]</td></tr>";
			echo "<tr><td>I/C number</td><td> :</td><td> $data[ic]</td></tr>";
			echo "<tr><td>Address</td><td> :</td><td> $data[address]</td></tr>";
			echo "<tr><td>Username</td><td> :</td><td> $data[username]</td></tr>";
			echo "</td><td>Email</td><td> : </td><td>
				 <a href=mailto:$data[email]>$data[email]</a></td></tr>";
			echo "</table>";
		}
		//Freeing all memory associated with it
		mysql_free_result($result);
		//Closes specified connection
		mysql_close($conn);
	?>
	<p>&nbsp;</p>
	</div>
	<div id="side">
	<b>Your Profile</b>
	<hr>
	<a href="myprofile.php">My profile</a><br />
	<a href="userinfo.php">Update profile</a><br />
	<a href="delete.php" onclick="return DropConfirm()">Drop Myself</a><br />
	<a href="logout.php">Logout</a>
    </div>
	<div class="style5" id="footer">
	Copyright © DinusGroupB, 2013	</div>
	</div>
</div>
</body>
</html>