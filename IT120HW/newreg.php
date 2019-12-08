<?php include('newsprocess.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Newsletters</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
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
</body>
</html>