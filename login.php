<?php
if(isset($_SESSION['email']))
header('location:http://localhost/tuwfeeq_assignment/products.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<?php include('header.php'); ?> 
<div class="row" style="margin-top:5%;margin-left: 30% ; margin-bottom: 5%;margin-right: 30%">
   <div class="panel-heading"><h3>LOGIN</h3></div><br>
      <form action="loginDone.php" method="POST">
      	<div class="form-group">
        	<input type="email"class="email" name="email" placeholder ="E-mail" required><br>
          <input type="password"class="email" name="password" placeholder ="Password" pattern=".{8,50}"title="Use combination of symbols & letters with length 6 to 50"required><br><br>
          <button type="submit" class="submit">Login</button>
          </div>
        </form><br>
        <div class="panel-footer">Don't have an account?<a href="signup.php">&nbsp;Register Here</a></div>
</div>
<?php include('footer.php'); ?>
</body>
</html>