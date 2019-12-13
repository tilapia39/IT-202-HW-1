 
<?php 
 
$user = "";  
$password = "";  
$host = "";  
$dbase = "";  
$table = "";  
 
$username_entered= $_POST['usernameentered'];
$email_entered= $_POST['emailentered']; 

 
$from= 'lat33@njit.edu'; 
 
$subject= $_POST['subject']; 
$body= $_POST['body']; 
 
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query="DELETE FROM login WHERE email='$email_entered' AND username='$username_entered'"; 
$result= mysqli_query ($dbc, $query)  
or die ('Error querying database.'); 
 
 
mysqli_close($dbc); 
?> 
 
 
<p id="para1">You have successfully deleted the person from accessing the website
