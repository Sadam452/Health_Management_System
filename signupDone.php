<?php
session_start();
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$age=$_POST['age'];
	$contact=$_POST['phone'];
	$email=$_POST['email'];
	$otp;
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hms');
	$q="INSERT INTO users(Name,Fathers_name,Age,Contact,Email) values ('$name','$fname','$age','$contact','$email')";
	$status=mysqli_query($con,$q);
    mysqli_close($con);
    if($status == 1){
    sendOtp();}
    function sendOtp(){	
	global $email;
	global $name;
    global $otp;
    $otp = rand(10000,100000);
    $subject = 'Registration Successful';
	$headers='from:hu55ainsadammmm@gmail.com'."\r\n";
	$headers.='Content-Type: text/html; charset=ISO-8859-1\r\n';
	$message='<b>Dear '.$name.' ,thank you for registering with us</b><br><h4>Kindly verify your account to avail more services.</h4><br>
	    <p>Your One Time Password(otp) for verification is <mark>'.$otp.'</mark><br>Kindly note that this otp is valid for 60 minutes only.</p>
		<a href="https://saddam.tech">Sadam Offcl</a> | <a href="api.whatsapp.com/send?phone=917889422245">Contact Us</a>';
	mail($email, $subject, $message, $headers);}
	$_SESSION['otp'] = $otp;
	$_SESSION['email'] = $email;
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Signup Done</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php include('header.php'); ?>
<?php
if($status==1)
{
	echo "<script>
    	alert('You have successfully registered.');
    	</script>";
}
else
{
	echo "<script>
    	alert('There is some issue with network, or user with this email address already exists. Please try again after few moments.');
    	window.location.href='signup.php';
    	</script>";
}?>
<div class="row" style="margin-top:5%;margin-left: 30% ; margin-bottom: 5%;margin-right: 30%">
   <div class="panel-heading"><h3>OTP Verification</h3></div><br>
      <form action="verificationDone.php" method="POST">
      	<div class="form-group">
        	<input type="number"class="email" name="otp" placeholder ="Enter One Time Password" required><br><br>
          <button type="submit" class="submit">Verify</button>
          </div>
        </form><br>
        <div class="panel-footer">Didn't recieve the OTP?<a href="<?php  ?>">&nbsp;Send Again</a></div>
</div>

<?php include('footer.php'); ?>
</body>
</html>