<?php
session_start();

// initializing variables
$fullname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("sql1.njit.edu", "lat33", "j5L3ngLv", "lat33");

// REGISTER USER
if (isset($_POST['reg_name'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fullname)) { array_push($errors, "fullname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Newsletters WHERE fullname='$fullname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['fullname'] === $fullname) {
      array_push($errors, "fullname already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
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