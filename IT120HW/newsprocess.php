<?php
session_start();

$fullname = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect();


if (isset($_POST['reg_name'])) {

  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);


  if (empty($fullname)) { array_push($errors, "fullname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }


  $user_check_query = "SELECT * FROM Newsletters WHERE fullname='$fullname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['fullname'] === $fullname) {
      array_push($errors, "fullname already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {

  	$query = "INSERT INTO Newsletters (fullname, email) 
  			  VALUES('$fullname', '$email')";
  	mysqli_query($db, $query);
  	$_SESSION['fullname'] = $fullname;
  	$_SESSION['success'] = "You will be taken to the login page";
  	header('location: comics.html');
  }
}

?>
