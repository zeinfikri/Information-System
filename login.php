<!DOCTYPE html>
<?php
	//Initialise the session
	
	if (isset($_SESSION['username']))
	{
	//Destroy the whole session
	$_SESSION = array();
	session_destroy();
	}
?>

<html>
<head>
	<title>SIADIN</title>
	<link rel="stylesheet"href="layoutstyle_2.css"type="text/css">
    <style type="text/css">
<!--
.style3 {
	color: #000000;
	font-size: 14px;
}
.style4 {font-size: x-small}
.style5 {color: #FFFFFF}
.style6 {color: #FF0000}
.style7 {
	font-size: large
}
.style8 {font-size: x-large; }
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
	<h2 class="style6">Please Login to access this website!</h2>
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
    <b>Login</b>
    <hr>
	<form method="post" action="home.php">			    
	  <p>Username: 
	    <br />
          <input type="text" name="username">
	    <br />
	    Password: <br />
	    <input type="password" name="password">
	    <br />
	    <input type="submit" value="Login">
        </p>
	  </form>
    <p><span class="style4"><span class="style3">New Users?</span> <a href="register.html">Sign up Now</a></span><span class="style4">!</span></a></p>
	</div>
	<div class="style5" id="footer">
	Copyright � DinusGroupB, 2013	</div>
	</div>
</div>
</body>
</html>