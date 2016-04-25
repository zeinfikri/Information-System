<?php
	//Initialise the session
	session_start();
	if (!isset($_SESSION['username']))
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
	}
	include("connect.php");
	$sql = "SELECT * FROM user WHERE username='".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
	$result = mysql_query($sql);
	$row = mysql_num_rows($result);
	if ($row == 0)
	{
		echo "Login Failed!";
		session_unset();
		echo "<meta http-equiv=\"refresh\"content=\"3;URL=login.php\">";
	}
	else
	{
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
	<h2 class="style9">Welcome to SIADIN</h2>
	<hr />
	<h3 class="style8">General Announcement</h3>
	<ul>
		<li class="style7" style = "list-style-type: square">FTMK: Pelajar yang mengikuti CCNA 1 dibawah tenaga pengajar Dr Faizal, 
		En Syarul Azhar dan En Najwan, Final Exam CCNA1 akan diadakan pada 20 Dis 2013 Makmal CCNA, Eksekutif, Sistem jam 10pagi - 12tgh. 
		Sila laksanakan Course Feedback dan semua chapter exam di dalam Cisco Netacad Portal sebelum menghadiri Final Exam.</li>
		<li class="style7" style = "list-style-type: square">FKM: Pembetulan senarai penempatan pelajar (Degree : Industrial Training 2012/2013)- 
		Semua pelajar diminta menyemak senarai penempatan masing-masing.</li>
		<li class="style7" style = "list-style-type: square">FTMK: Taklimat Penyeliaan Latihan Industri 4 Disember 2013 @ OBE 1 pada 2.00pm. 
		Kepada yang akan menjalani LI pada semester 2 depan dimestikan hadir.</li>
		<li class="style7" style = "list-style-type: square">FTMK: Taklimat PSM untuk pelajar Tahun 3: 27 Nov 2013, 1 pm</li>
		<li class="style7" style = "list-style-type: square">UTeM: We are looking for participants to join the competition for 
		demonstrating product and research ideas in conjunction with the Fourth Software Engineering Postgraduate Workshop (SEPoW 2013) is 
		to be held in Melaka, Malaysia on 19 November 2013. Deadline is on 12th August 2013.</li>
		<li class="style7" style = "list-style-type: square">FTMK: Final Year BITM Students. Attachment & Internship Scheme under the 
		Creative Industry Lifelong Learning Programme (supported by MOSTI & MDEC) has opened to all eligible applicants. 
		For more info, kindly contact Ms. Sherry (syariffanor@utem.edu.my)</li>
	</ul>
	</div>
	<div id="side">
	<b>Profile</b>
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
	}
	//Closes specified connection
	mysql_close($conn);
?>