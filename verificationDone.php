<?php
session_start();
	$otp=$_POST['otp'];
	$rotp = $_SESSION['otp'];
	$email = $_SESSION['email'];
	if($rotp==$otp){
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hms');
	$q="UPDATE users SET status='Yes' WHERE email = '$email' ";
	$status=mysqli_query($con,$q);
    mysqli_close($con);
    if($status==1)
{
	echo "<script>
    	alert('Account verified successfully, you can login now.');
    	window.location.href='http://localhost/Health_Management_System/login.php';
    	</script>";
}
else
{
	echo "<script>
    	alert('There is some issue with network, or the otp doesn't match. Please try again after few moments.);
    	window.location.href='http://localhost/Health_Management_System/signupDone.php';
    	</script>";
}}
else
{
	echo "<script>
    	alert('Sorry for the inconvenience caused. We are having some internal server issue.);
    	window.location.href='http://localhost/Health_Management_System/signupDone.php';
    	</script>";
}
?>