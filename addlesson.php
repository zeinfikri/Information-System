<?php
	//Initialise the session
	session_start();
	include("connect.php");
	$sql = "SELECT * FROM user WHERE username='".$_SESSION['username']."'";
	$result = mysql_query($sql) or
	die ("Error running MySQL query");
	$row = mysql_fetch_assoc($result);
?>

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
	<script type="text/javascript">
	function verifylesson()
	{
		var a = document.forms["addlesson"]["id"].value;
		var b = document.forms["addlesson"]["name"].value;
		var c = document.forms["addlesson"]["semester"].value;
		var e = document.forms["addlesson"]["credit"].value;
		
		if((a && b && c && e) == "")
		{
			alert("Please fill in all the field!");
			return false;
		}
		else
		{
			alert("Lesson Added");
			return true;
		}
	}
	</script>
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
	<h2 align="center" class="style9">Add Lessons for Student</h2>
    <hr>
    <form name="addlesson" onSubmit="return verifylesson()" method="post" action="insertlesson.php">
		<table align="center">
		<tr>
			<td width="86">Lesson code</td> 
			<td width="10"><div align="center">:</div></td>
		  <td width="200">
	    <label>
					<input name="id" id="id" type="text" size="30">
				</label>			</td>
		</tr>
		<tr>
			<td>Lesson name</td>
			<td><div align="center">:</div></td>
			<td>
				<label>
					<input name="name" id="name" type="text" size="30">
				</label>			</td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><div align="center">:</div></td>	
			<td>
				<label>
					<input name="semester" type="text" id="semester" size="30">
				</label>			</td>
		</tr>
		<tr>
			<td>Credit</td>
			<td><div align="center">:</div></td>
			<td>
				<label>
					<input name="credit" id="credit" type="text" size="30">
				</label>			</td>
		</tr>
		<tr>
			<td height="26"></td><td><div align="center"></div></td> <td><input type="submit" value="Add">
			<input type="reset" value="Reset"></td>
		</tr>
		</table>
	</form>
	</div>
	<div id="side">
	<b>Your Profile</b>
	<hr>
	<a href="myprofile.php">My profile</a><br />
	<a href="userinfo.php">Update profile</a><br />
	<a href="delete.php" onClick="return DropConfirm()">Drop Myself</a><br />
	<a href="logout.php">Logout</a>
    </div>
	<div class="style5" id="footer">
	Copyright � DinusGroupB, 2013	</div>
	</div>
</div>
</body>
</html>
<?php
	//Closes specified connection
	mysql_close($conn);
?>