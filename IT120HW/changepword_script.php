<?php

session_start();

if (!(isset($_SESSION['login_user']) || $_SESSION['login_user'] == ''))
{
    header("location:login.php");
}

$dbcon = mysqli_connect("sql1.njit.edu", "lat33", "j5L3ngLv", "lat33") or die(mysqli_error($dbcon));

$password1 = mysqli_real_escape_string($dbcon, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($dbcon, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($dbcon, $_SESSION['login_user']);

if ($password1 <> $password2)
{
    echo "your passwords do not match";
}
else if (mysqli_query($dbcon, "UPDATE login SET password='$password1' WHERE username='$username'"))
{
    echo "You have successfully changed your password.";
}
else
{
    mysqli_error($dbcon);
}
mysqli_close($dbcon);

?>