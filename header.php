<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header">
	<div id="header-left">
		<a href="http://localhost/Health_Management_System/index.php"><img src="images\logo.png"></a>
	</div>
	<div id="header-right1">
		<img src="images\clock.svg"><h4 style="margin-top: 10px;">MON - FRI: 08:00AM - 20:00PM</h4>
		<span>SAT - SUN: 08:00AM - 10:00AM</span>
	</div>
	<div id="header-right2">
		<img src="images\smartphone.svg">
		<h4 style="margin-top: 10px;">(+91)7880000000</h4>
				<span>Contact Us For Any Kind Of Help</span>
	</div>
	<div id="header-right3">
		<img src="images\map-pin.svg">
		<h4 style="margin-top: 10px;">452 SRINAGAR</h4>
				<span>Lane 2, Main Office</span>
	</div>
</div>
<div id="header-lower">
	<div class="topnav" id="header-lower-left">
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		<a href="index.php">Home</a>
		<a href="doctors.php">Doctors</a>
		<a href="departments.php">Departments</a>
		<a href="blog.php">Blogs</a>
		<?php
              if(!isset($_SESSION['email'])){
              ?>
		<i class="fa fa-user-circle-o"></i><a href="login.php">Login</a>
		<?php 
	}else{?>
		<i class="fa fa-user-circle-o"></i><a href="logout.php">Logout</a>
	<?php }?>
		<a href="services.php">Services</a>
		<a href="#footer">Contact</a>
		<a href="pharmacy.php">Pharmacy</a><sup id="new">NEW</sup>

	</div>
	<div id="header-lower-right">
		<a href="appointment.php"><i class="fa fa-calendar"></i> Appointment</a>
	</div>
</div>
</body>
</html>