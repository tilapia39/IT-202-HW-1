<?php 
 // to get values pass from form in login.php file
 $username = "";

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
 $password = "";
if(isset($_POST['password'])){
    $password = $_POST['password'];
 }
 // to prevent mysql injection
 $username = stripcslashes($username);
 $password = stripcslashes($password);
 $username = mysql_real_escape_string($username);
 $password = mysql_real_escape_string($password);

 //connect to the server select database
 	mysql_connect("sql1.njit.edu", "lat33", "");
	mysql_select_db("lat33");

 // Query the database for user
 $result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'")
  or die('Failed to query database'.mysql_error());
 $row = mysql_fetch_array($result);
 if ( $row['username'] == $username && $row['password'] == $password ) {
  echo "login success! Welcome".$row['username'];
 } else {
     echo "Failed to login!";
}

?>