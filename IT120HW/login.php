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
				<!-- <link href="loginstyle.css" rel="stylesheet" type="text/css"> -->
				<link href="mainstyles.css" type="text/css" rel="stylesheet" />
				<link href="home.css" type="text/css" rel="stylesheet" />
</head>
<body>





	<header>

		<img src="images/college.jpg" alt="campus" />
		<nav class="horizontalNavigation">
			<ul>
				<li><a href="homework.html">Home</a></li>
				<li><a href="colleges.html">Colleges</a></li>
				<li><a href="feedback.html">Feedback</a></li>
				<li><a href="newreg.php">Newsletter</a></li>
				<li><a href="login.php">Account</a></li>
			</ul>




		</nav>



	</header>




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


	<footer>
	Luis Tapia &#9830 <a href="mailto:lat33@njit.edu"> lat33@njit.edu </a> &#9830 ORIGINAL WEBSITE DON'T STEAL &#9830
	</footer>


</body>
</html>