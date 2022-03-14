<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book An Appointment With Us!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<script>
function myFunction(){
  var x = document.getElementById("top-lower-left");
  if (x.className === "topnav") {
    x.className += "responsive";
  } else {
    x.className = "topnav";
  }
}
function minDate(){
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yyyy = today.getFullYear();
if(dd<10){
  dd='0'+dd;
} 
if(mm<10){
  mm='0'+mm;
} 
today = yyyy+'-'+mm+'-'+dd;
document.getElementById("date1").setAttribute("min",today);
document.getElementById("date1").value = today;
}
window.addEventListener("load", myInit, true); function myInit(){f(),minDate()}
</script>
</head>
<body>
<?php include('header.php'); ?>
<div id="appointment-1">
	<h2>We are the family of 500Cr+ across the world</h2>
	<h3>Book with us and feel the love of being with us!</h3>
</div>
<div id="appointment-2">
	<div id="appointment-2-left">
		<span id="half-line1"></span>
		<h2 style="margin-left: 100px;">Book With Your Appropriate Doctor</h2>
		<h3 style="margin-left: 100px;">Some Silent Features:</h3>
		<ul style="margin-left: 100px;">
			<li>Bed details – Total 1005 beds</li>
			<li>Intensive Care Units – 95 beds (SICU, MICU, NICU, PICU)</li>
			<li>Room Categories – Facilitated with Air conditioner, Bathroom attached, Attendant couch, TV, Refrigerator and Background Music System</li>
			<li>Spiral dual slice CT scan – Performing average 250 CT Scan Per Month</li>
			<li>Pathology Laboratory</li>
			<li>24 X 7 Emergency Services</li>
			<li>And Many More...</li>
		</ul>
	</div>
	<div id="appointment-2-right">
		<span id="half-line1"></span>
		<form action="appointmentDone.php" method="post">
			<label for="fname">First Name</label>
			<input type="text" name="fname" id="fname"pattern="[A-Za-z]{4,20}" required>
			<label for="lname">Last Name</label>
			<input type="text" name="lname" id="lname"pattern="[A-Za-z]{2,20}" required>
			<label for="contact">Contact Number</label>
			<input type="tel" name="contact" id="contact"pattern="[0-9]{10}" required>
			<label for="email">Email</label>
			<input type="email" name="email" id="email" required>
			<label for="date1">Choose Date</label>
			<input type="date" name="date1" id="date1"min='2021-01-01' max='2030-01-13'required>
			<label for="time">Time Slot</label>
			<select name="time" id="time" required>
				<option value="">Pick Time Slot</option>
				<option>09:00 AM - 09:15 AM</option>
				<option>09:15 AM - 09:30 AM</option>
				<option>09:30 AM - 09:45 AM</option>
				<option>09:45 AM - 10:00 AM</option>
				<option>10:00 AM - 10:15 AM</option>
				<option>10:15 AM - 10:30 AM</option>
				<option>10:30 AM - 10:45 AM</option>
				<option>10:45 AM - 11:00 AM</option>
				<option>11:00 AM - 11:15 AM</option>
				<option>11:15 AM - 11:30 AM</option>
				<option>11:30 AM - 11:45 AM</option>
				<option>11:45 AM - 12:00 PM</option>
				<option>12:00 PM - 12:15 PM</option>
				<option>12:15 PM - 12:30 PM</option>
				<option>12:30 PM - 12:45 PM</option>
				<option>12:45 PM - 01:00 PM</option>
			</select>
			<label for="category">Category</label>
			<select name="category" id="category" required>
				<option value="">Choose Category</option>
				<option>Neurology</option>
				<option>Abcd</option>
				<option>Wxyz</option>
				<option>Pqrs</option>
			</select>
			<label for="service">Service</label>
			<select name="service" id="service" required>
				<option value="">Choose Department</option>
				<option>Department One</option>
				<option>Abcd</option>
				<option>Wxyz</option>
				<option>Pqrs</option>
			</select>
			<label for="professional">Professional</label>
			<select name="professional" id="professional" required>
				<option value="">Pick Doctor</option>
				<option>Dr Aabid</option>
				<option>Dr abcd</option>
				<option>Dr Wxyz</option>
				<option>Dr Pqrs</option>
			</select><br>
			<input type="submit" name="appointment" value="Book" class="link-appointment">
		</form>
	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>