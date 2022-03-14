<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="footer">
	<span id="half-line1"></span>
	<div id="address">
		<h2 style="font-family: monospace;">Contact</h2><br>
		<address>1355 Market Z-Lane<br>Suite 900 Srinagar, P 900003</address>
		<i class="fa fa-phone"id="mail-icon"></i><span> (+91)-9100789345,7889400000</span>
		<p><i class="fa fa-envelope-open-o"id="mail-icon"></i><a href="mailto:info.sadam@gmail.com"> info.sadam@gmail.com</a></p><br><br>
		<span id="social"></span>
		<a href="#" class="fa fa-twitter"></a>&nbsp;
		<a href="#" class="fa fa-youtube"></a>&nbsp;
  	<a href="#" class="fa fa-whatsapp"></a>&nbsp;
  	<a href="#" class="fa fa-linkedin"></a>&nbsp;
  	<a href="#" class="fa fa-facebook"></a>&nbsp;
  	<a href="#" class="fa fa-instagram"></a><br><br>
  	<i><a href="privacy.html">Privacy Policy</a></i>&nbsp;|&nbsp;<i><a href="terms.html">Terms Of Use</a></i><br><br>
		&copy;<span id="copyright">2021 - </span>
		<i>All Rights Reserved.</i>
		<p>Designed by Sadam with &#128151; </p>
		<script>function f(){
          var x=new Date();
          var years=x.getFullYear();
          document.getElementById('copyright').innerHTML+=years;}
        </script>
	</div>
	<div id="quick-links">
		<span id="half-line1"></span>
		<h2 style="font-family: monospace;">Quick Links</h2>
		<a href="about.php" class="quick-links-footer">About</a>
		<a href="#pricing.php" class="quick-links-footer">Pricing</a>
		<a href="doctors.php" class="quick-links-footer">Doctors</a>
		<a href="departments.php" class="quick-links-footer">Departments</a>
		<a href="blog.php" class="quick-links-footer">Blog</a>
		<a href="appointment.php" class="quick-links-footer">Appointment</a>
		<a href="map.php" class="quick-links-footer">Map</a>
		<a href="medical.php" class="quick-links-footer">Medical</a>
		<a href="gallery.php" class="quick-links-footer">Gallery</a>
		<a href="pharmacy.php" class="quick-links-footer">Pharmacy</a>
	</div>
	<div id="message">
		<span id="half-line1"></span>
		<h2 style="font-family: monospace;">Send Us Message</h2>
		<form action="messageRecieved.php" method="post" enctype="multipart/form-data" name="EmailForm">
			<p>Enter Your Name</p>
			<input class="message-input"type="text" pattern="[a-zA-Z\s]{5-20}"name="FirstName"required><br>
			<br><p>Enter Your Email</p>
			<input class="message-input"type="email" name="email"required>
			<br><br><p>Enter Subject Of Message</p>
			<input class="message-input"type="text" pattern="[a-zA-Z\s]{5-50}"name="subject"required>
			<br><br><p>Enter Your Message</p>
			<textarea class="message-input"name="yourMessage" rows="4" cols="50"required>
            </textarea>
            <br><input class="link3"type="submit" name="sumbit" value="Send Message">
		</form>
	</div>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
	<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</div>
</body>
</html>