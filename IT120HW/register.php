<?php include('server.php') ?>

<!DOCTYPE html>

<html>

<head>

<!-- 
Author: Luis Tapia
-->

<meta charset="UTF-8"/>

  <title>Registration</title>

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

  <div class="register">
  	<h2>Register</h2>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
  </div>
	
	
	
	
	


	<footer>
	Luis Tapia &#9830 <a href="mailto:lat33@njit.edu"> lat33@njit.edu </a> &#9830 ORIGINAL WEBSITE DON'T STEAL &#9830
	</footer>

</body>

</html>

