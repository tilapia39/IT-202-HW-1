<?php include('newsprocess.php') ?>
<!DOCTYPE html>

<html>

<head>

<!-- 
Author: Luis Tapia
-->

<meta charset="UTF-8"/>

	<title>Newsletters</title>

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

	
	
  <div class="newsletter">
  	<h2>Subscribe to my newsletters if you wish to get news about colleges</h2>
  </div>
	
  <form method="post" action="newreg.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>fullname</label>
  	  <input type="text" name="fullname" value="<?php echo $fullname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_name">Register</button>
  	</div>
  	<p>
  		If you want to unsubscribe to my news letters click here <a href="unsubscribe.php">Unsubscribe</a>
  	</p>
  </form>
	
	
	
	
	
	
	
	
	
	


	<footer>
	Luis Tapia &#9830 <a href="mailto:lat33@njit.edu"> lat33@njit.edu </a> &#9830 ORIGINAL WEBSITE DON'T STEAL &#9830
	</footer>

</body>

</html>