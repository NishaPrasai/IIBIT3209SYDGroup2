<?php
session_start(); // Starting Session
include 'include/config.php';
$error=array(); // Variable To Store Error Message
if (isset($_POST['login'])) {

if (empty($_POST['email']) || empty($_POST['password'])) {

$error[] = "Email or Password has to be filled";

}
else
{

$email=$_POST['email'];
$password=$_POST['password'];


//$email = stripslashes($email);
//$password = stripslashes($password);

$query = mysqli_query($db,"SELECT * FROM register WHERE password='$password' AND email='$email'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header('location: index.php'); // Redirecting To Other Page
} else {
$error[] = "Email or Password is invalid";
}
mysqli_close($db);
}
}

?>
