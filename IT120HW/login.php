<?php
include('process.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<h2>Login Page</h2>
<form action="" method="post">
<label>Username :</label>
<input id="name" name="username" placeholder="Enter your username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
  	<p>
  		Don't have an account? Click on the link to create an account and access my features. <a href="register.php">Register here</a>
  	</p>
</form>
</div>
</body>
</html>