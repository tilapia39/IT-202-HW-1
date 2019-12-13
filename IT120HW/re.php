 
<?php 
 
$user = "";  
$password = "";  
$host = "";  
$dbase = "";  
$table = "";  
 
 
$email_entered= $_POST['emailentered']; 

 
$from= 'lat33@njit.edu'; 
 
$subject= $_POST['subject']; 
$body= $_POST['body']; 
 
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query="DELETE FROM Newsletters WHERE email='$email_entered'"; 
$result= mysqli_query ($dbc, $query)  
or die ('Error querying database.'); 
 
 
mysqli_close($dbc); 
?> 
 
 
<p id="para1">You have successfully unsubscribed from this newsletter. 
 
