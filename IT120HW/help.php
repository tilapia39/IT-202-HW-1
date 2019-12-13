<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: profile.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="profilestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
      <img src="images/stonks.JPG" alt="Stonks" id="stonks" />     
      <nav class="horizontal" id="topLinks">
            <a id="navicon" href="#"><img src="ws_navicon.png" alt="" /></a>           
         <ul>    
		 
		 <li><a href="homework.html">Home</a></li>
		<li><a href="colleges.html">Colleges</a></li>
		<li><a href="collegewishlist.php">College Wishlist</a></li>
		<li><a href="feedback.html">Feedback</a></li>
		<li><a href="newreg.php">Newsletter</a></li>
		<li><a href="login.php">Account</a></li>
        <li><a href="help.php">Contact</a></li>
        <li><a href="password.html">Password</a></li>
         </ul>
      </nav>      
</header>

If you have forgotten your password please email me through this form and provide your email so that I can contact you back.

<form method="post" action="sendmail.php">
  Email: <input name="email" type="text" /><br>
  Message:<br>
  <textarea name="message" rows="15" cols="40"></textarea><br>
  <input type="submit" />
</form>

<div id="profile">
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>