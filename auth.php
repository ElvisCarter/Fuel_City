<?php

//require 'connect.php';
session_start();
if (!isset($_SESSION['user']))
{
	header("Location: main.php");
};
echo $_SESSION['user'];



?>