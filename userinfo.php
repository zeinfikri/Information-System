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
	function verifyupdate()
	{
		var a = document.forms["update"]["name"].value;
		var b = document.forms["update"]["ic"].value;
		var c = document.forms["update"]["address"].value;
		var e = document.forms["update"]["username"].value;
		var f = document.forms["update"]["email"].value;
		var pass1= document.forms["update"]["password"].value;
		
		if((a && b && c && e && f && pass1) == "")
		{
			alert("Please fill in all the field!");
			return false;
		}
		else
		{
			alert("Data Updated. Thank you.");
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
	<h2 align="center" class="style9">Update Profile</h2>
    <hr>
    <form name="update" onSubmit="return verifyupdate()" method="post" action="update.php">
		<table align="center">
		<tr>
			<td width="74">Name</td> 
			<td width="10"><div align="center">:</div></td>
		  <td width="181">
<label>
					<input name="name" id="name" type="text" size="30" value="<?php echo $row['name']; ?>">
				</label>			</td>
		</tr>
		<tr>
			<td>I/C</td>
			<td><div align="center">:</div></td>
			<td>
				<label>
					<input name="ic" id="ic" type="text" size="30" value="<?php echo $row['ic']; ?>">
				</label>			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td><div align="center">:</div></td>
			<td>
				<label>
					<input name="address" id="address" type="text" size="30" value="<?php echo $row['address']; ?>">
				</label>			</td>
		</tr>
		<tr>
			<td height="24">Username</td>
			<td><div align="center">:</div></td>	
			<td>
				<label>
					<input name="username" type="text" id="username" size="30" maxlength="10" value="<?php echo $row['username']; ?>">
				</label>			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td><div align="center">:</div></td>
			<td>
			<label>
				<input name="email" type="text" id="email" size="30" value="<?php echo $row['email']; ?>">
			</label>			</td>
		</tr>
		<tr>
			<td width="74">Password</td>
			<td width="10"><div align="center">:</div></td>
		  <td width="181">
			<label>
					<input name="password" type="password" id="password" size="30" maxlength="8" value="<?php echo $row['password']; ?>">
				</label>			</td>
		</tr>
		<tr>
			<td height="26"></td><td><div align="center"></div></td> <td><input type="submit" value="Update">
		</tr>
		</table>
	</form>
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
<?php
	//Closes specified connection
	mysql_close($conn);
?>