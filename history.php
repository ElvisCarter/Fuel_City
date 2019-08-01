<?php
include 'auth.php';
echo "You're on the History page ";
echo $_SESSION['user'];
?>

<html>

<head>
<title>Fuel History</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>

<body>

<header>
		<h1> Calculate Fuel</h1>
			<nav>
				<ul class="nav">
					<li><a href="profile.php"> Client Profile Management </a></li>
					<li><a href="history.php"> Fuel History </a></li>
					<li><a href="quoteform.php"> Pricing Quote </a></li>
					<li><a href="logout.php"> Logout </a></li>
				</ul>
			
			</nav>
	</header>
	
	
	<div class="history" style="align-content: center">
	<h2 align="center">Fuel Quote History</h2>
<table style="width:75%" align="center">
  <tr>
    <th>Gallons Requested</th>
    <th>Delivery Address</th> 
    <th>Delivery Date</th>
    <th>Suggested Price (USD)</th>
    <th>Total Amount Due (USD)</th>
  </tr>
  <tr>
    <td>10</td>
    <td>TX</td>
    <td>01/01/2019</td>
    <td>2.50</td>
    <td>25</td>
  </tr>
  <tr>
    <td>10</td>
    <td>TX</td>
    <td>01/01/2019</td>
    <td>2.50</td>
    <td>25</td>
  </tr>
  <tr>
    <td>10</td>
    <td>TX</td>
    <td>01/01/2019</td>
    <td>2.50</td>
    <td>25</td>
  </tr>
</table>

</body>
</html>