<?php
	$name=$_POST['FirstName'];
	$email=$_POST['email'];
	$subject1=$_POST['subject'];
	$message=$_POST['yourMessage'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hms');
	$q="INSERT INTO usermessages values ('$name','$email','$subject1','$message')";
	$status=mysqli_query($con,$q);
        mysqli_close($con);	
    $subject = 'Your query has been successfully recieved';
	$headers='from:hu55ainsadammmm@gmail.com'."\r\n";
	$headers.='Content-Type: text/html; charset=ISO-8859-1\r\n';
	$message='<b>Thanks for raising a query. We are looking forward to answer your query and make things even better</b><h4>Kind regards, TEAM SAM HOSPITALS.</h4><br><a href="https://saddam.tech">Sadam Offcl</a> | <a href="api.whatsapp.com/send?phone=917889422245">Contact Us</a>';
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
    	alert('Your query has been recieved,Thanks.');
    	window.location.href='index.php';
    	</script>";
}
else
{
	echo "<script>
    	alert('There is some issue with network, try again');
    	window.location.href='index.php#footer';
    	</script>";
}?>
</body>
</html>