<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); 
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
      <img src="stonks.JPG" alt="Stonks" id="stonks" />     
      <nav class="horizontal" id="topLinks">
            <a id="navicon" href="#"><img src="ws_navicon.png" alt="" /></a>           
         <ul>    
            <li><a href="#">About</a></li>
            <li><a href="#">Account</a></li>
            <li><a href="support.html">Support</a></li>
         </ul>
      </nav>      
</header>

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>