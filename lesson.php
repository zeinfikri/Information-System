<?php
	//Initialise the session
	session_start();
	include("connect.php");
	$sql = "SELECT * FROM user WHERE username='".$_SESSION['username']."'";
	$result = mysql_query($sql);
	$a=mysql_fetch_array($result);
	if($a['status']== 'lecturer')
	{
?>

<html>
<head>
	<title>SIADIN</title>
	<link rel="stylesheet"href="layoutstyle_11.css"type="text/css">
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
	function myConfirm()
	{
		var answer = confirm("Are you sure want to delete?");
		
		if(answer)
			{
				window.location="deletelesson.php?id=$data[id]";
				return true;
			}
		else
			{
				window.location="lesson.php"
				return false;
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
	<h2 class="style9">Lessons</h2>
	<hr />
	  <?php
		$sql = "SELECT * FROM lesson WHERE lecturer='".$_SESSION['username']."'";
		$result = mysql_query($sql) or
		die ("Error running MySQL query");
		$row = mysql_num_rows($result);
		$x=1;
		if ($row == 0)
		{
			echo "There is no Lesson for now.";
			echo "<hr></hr>";
				echo "<div class=y><a href='addlesson.php'>Add Lesson</a></div>";
		}
		else
		{
			//Fetches a result row as an associative array
			while($data = mysql_fetch_array($result))
			
			{
				$sql1 = "SELECT * FROM user WHERE username='$data[lecturer]'";
				$result1 = mysql_query($sql1) or
				die ("Error running MySQL query");
				$data1 = mysql_fetch_array($result1);
				echo "<table>";
				echo "<tr><td>$x. </td>
						  <td> $data[id] - $data[name]. </td>
						  <td> Sem </td><td> $data[semester]. </td>
						  <td> Credit: </td><td> $data[credit]. </td>
						  <td> Lecturer: </td><td> $data1[name]. </td>
						  <td><a href='updatelesson.php?id=$data[id]'> (Update Lesson </a></td>
						  <td> or </td>
						  <td><a href='deletelesson.php?id=$data[id]' onclick='return myConfirm()'> Delete Lesson) </a></td>
					  </tr>";
				echo "</table>";
				$x++;
			}
			echo "<hr></hr>";
			echo "<div class=y><a href='addlesson.php'>Add Lesson</a></div>";
		}
		//Freeing all memory associated with it
		mysql_free_result($result);
	?>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
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
	Copyright © DinusGroupB, 2013	</div>
	</div>
</div>
</body>
</html>

<?php
	}
	else if($a['status']== 'student')
	{
?>

<html>
<head>
	<title>SIADIN</title>
	<link rel="stylesheet"href="layoutstyle_11.css"type="text/css">
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
	function myConfirm1()
	{
		var answer = confirm("Are you sure want to delete?");
		
		if(answer)
			{
				window.location="deleteenrolllesson.php?id=$data[id]";
				return true;
			}
			
		else
			{
				window.location="lesson.php";
				return false;	
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
	<h2 class="style9">Lessons</h2>
	<hr />
	<p>
	<?php
		$sql = "SELECT * FROM lesson";
		$result = mysql_query($sql) or
		die ("Error running MySQL query");
		$row = mysql_num_rows($result);
		$x=1;
		//Fetches a result row as an associative array
		if ($row == 0)
		{
			echo "There is no Lesson for now.";
		}
		else
		{
			//Fetches a result row as an associative array
			while($data = mysql_fetch_array($result))
			{
				$sql1 = "SELECT * FROM user WHERE username='$data[lecturer]'";
				$result1 = mysql_query($sql1) or
				die ("Error running MySQL query");
				$data1 = mysql_fetch_array($result1);
				echo "<table>";
				echo "<tr><td>$x. </td>
						  <td> $data[id] - $data[name]. </td>
						  <td>Sem </td><td> $data[semester]. </td>
						  <td>Credit: </td><td> $data[credit]. </td>
						  <td>Lecturer: </td><td> $data1[name]. </td>
						  <td><a href='enrolllesson.php?id=$data[id]'> (Enroll Lesson) </a></td>
					  </tr>";
				echo "</table>";
				$x++;
			}
		}
		//Freeing all memory associated with it
		mysql_free_result($result);
	?>
	<hr />
	<h2 class="style9">Your Lessons List</h2>
	<hr />
	<?php
		$sql = "SELECT * FROM enroll";
		$result = mysql_query($sql) or
		die ("Error running MySQL query");
		$row = mysql_num_rows($result);
		$x=1;
		//Fetches a result row as an associative array
		if ($row == 0)
		{
			echo "You have not enrolled any lesson yet";
		}
		else
		{
			//Fetches a result row as an associative array
			while($data = mysql_fetch_array($result))
			
			{
				$sql1 = "SELECT * FROM user WHERE username='$data[lecturer]'";
				$result1 = mysql_query($sql1) or
				die ("Error running MySQL query");
				$data1 = mysql_fetch_array($result1);
				echo "<table>";
				echo "<tr><td>$x. </td>
						  <td> $data[id] - $data[name]. </td>
						  <td>Sem </td><td> $data[semester]. </td>
						  <td>Credit: </td><td> $data[credit]. </td>
						  <td>Lecturer: </td><td> $data1[name]. </td>
						  <td><a href='deleteenrolllesson.php?id=$data[id]' onclick='return myConfirm1()'> (Delete Enrolled Lesson) </a></td>
					  </tr>";
				echo "</table>";
				$x++;
			}
		}
		//Freeing all memory associated with it
		mysql_free_result($result);
	?>
	<p>&nbsp;</p>
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
	Copyright © DinusGroupB, 2013	</div>
	</div>
</div>
</body>
</html>

<?php
	}
	else {}
	//Closes specified connection
	mysql_close($conn);
?>