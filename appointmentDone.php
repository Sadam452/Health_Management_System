<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contactNumber=$_POST['contact'];
	$email=$_POST['email'];
	$date=$_POST['date1'];
	$time=$_POST['time'];
    $category=$_POST['category'];
	$service=$_POST['service'];
	$professional=$_POST['professional'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hms');
	$q="INSERT INTO appointment(firstName,lastName,contactNumber,email,date1,time1,category,service,professional) values ('$fname','$lname','$contactNumber','$email','$date','$time','$category','$service','$professional')";
	$status=mysqli_query($con,$q);
        mysqli_close($con);	
    $subject = 'Appointment Confirmation';
	$headers='from:hu55ainsadammmm@gmail.com'."\r\n";
	$headers.='Content-Type: text/html; charset=ISO-8859-1\r\n';
	$message='<b>Thank you&#128151; for booking an appointment with us, we are delighted to serve you and more like you.</b><br><h3>Your booked date: <mark>'.$date.'</mark></h3><br><h2><mark>Time : '.$time.'</mark></h2><h4>Kind regards, TEAM SAM HOSPITALS.</h4><br><a href="https://saddam.tech">Sadam Offcl</a> | <a href="api.whatsapp.com/send?phone=917889422245">Contact Us</a>';
	mail($email, $subject, $message, $headers);
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Appointment Done</title>
</head>
<body>
<?php
if($status==1)
{
	echo "<script>
    	alert('Your Booking Is Confirmed With Us,Thanks.');
    	window.location.href='appointment.php';
    	</script>";
}
else
{
	echo "<script>
    	alert('There is some issue with network, try again');
    	window.location.href='appointment.php';
    	</script>";
}?>
</body>
</html>