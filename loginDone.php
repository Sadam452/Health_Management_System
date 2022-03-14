<?php
session_start();
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hms');
	$q="SELECT * FROM users WHERE email='$email' && password='$password' && status ='Yes'";
	$status=mysqli_query($con,$q);
	$num=mysqli_num_rows($status);
    mysqli_close($con);
    if($num==1)
		{
			$_SESSION['email']=$email;
			echo "<script>alert('You are  successfully logged in, Enjoy the services');
			window.location.href='http://localhost/Health_Management_System/userHome.php';
			</script>";
		}
		else{
			echo "<script>alert('No record found with such credentials. Try: -> Creating Account first -> Or verifying your account if already created.');
			window.location.href ='http://localhost/Health_Management_System/login.php';
			</script>";
		}
 ?>