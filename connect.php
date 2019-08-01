<?php

session_start();
// get values from form in main.php file 
$username = $_POST['username'];
$password = $_POST['password'];

$link = mysqli_connect('localhost','root','','mysql')or die("Unable to connect");

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);

//to prevent mysql injection
mysqli_connect('localhost','root','','mysql')or die("Unable to connect");
echo "Great! Connected!!";

$result = mysqli_query($link,"select * from fuel_login where username = '$username' and Password = '$password'")
or die("Failed to query Database".mysqli_error());

$row = mysqli_fetch_array($result);
if($row['username'] == $username && $row['Password']==$password )
{
	echo "Login Successful!! Welcome " .$row['username'];
	$_SESSION['user']= $username;
	$_SESSION['passwd']= $password;
	
	

		
} else
{
	
	echo "Login Failed. Please Try again or go to registration page to register.";
	header("Location: main.php");
	
}
//
$_SESSION['username']= $username;
$_SESSION['password']= $password;

?>
 