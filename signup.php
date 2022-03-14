<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php include('header.php'); ?>

<div class="row" style="margin-top:5%;margin-left: 30% ; margin-bottom: 5%;margin-right: 30%">
   <div class="panel-heading"><h3>SIGN UP</h3></div><br>
      <form action="signupDone.php" method="POST">
      	<div class="form-group">
        	<input type="name"class="email" name="name" placeholder ="Your Name" pattern=".{4,50}" required><br>
          <input type="text"class="email" name="fname" placeholder ="Father's Name" pattern=".{4,50}"title="length 4-50."required><br>
          <input type="number"class="email" name="age" placeholder ="Your Age" pattern="[0-9]{1,3}"title="Number from 12 to 150"required><br>
          <input type="number"class="email" name="phone" placeholder ="Contact Number" pattern="[0-9]{10}"title="Valid contact number(10 digits)"required><br>
          <input type="email"class="email" name="email" placeholder ="Email" title="Valid Email"required><br><br>
          <button type="submit" class="submit">Sign Up</button>
          </div>
        </form><br>
        <div class="panel-footer">Already have an account?<a href="login.php">&nbsp;Login Here</a></div>
</div>

<?php include('footer.php'); ?>
</body>
</html>