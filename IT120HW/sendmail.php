<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  $phone = $_REQUEST['phone'] ;

  mail( "lat33@njit.edu", "Feedback Form Results",
    $message, "From: $email" );
  header( "Location: emailthanks.html" );
?>