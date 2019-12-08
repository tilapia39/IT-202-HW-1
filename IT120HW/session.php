<?php
 $conn = mysqli_connect("sql1.njit.edu", "lat33", "j5L3ngLv", "lat33");
session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT username from login where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>