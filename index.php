<?php
require ("connect.php");
echo "You're on the index page " .$username .$password;
echo " What's your next destination?";
echo $_SESSION['user'];
?>
<html>

<head>
<title>Fuel Rate Web Application - secured page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<header align: center >
		<h1> WELCOME TO FUEL WORLD</h1>
			<nav>
				<ul class="nav">
					<li><a href="profile.php"> Client Profile Management </a></li>
					<li><a href="history.php"> Fuel History </a></li>
					<li><a href="quoteform.php"> Pricing Quote </a></li>
					<li><a href="logout.php"> Logout </a></li>
				</ul>
			
			</nav>
	</header>

</body>

</html>	



