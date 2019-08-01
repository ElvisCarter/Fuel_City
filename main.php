<!DOCTYPE html>


<html>

<head>
<title>Fuel Rate Web Application</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>
		<h1> Welcome to Fuel City</h1>
			<nav>
				<ul class="nav">
					<li><a href="main.php"> Login </a></li>
					<li><a href="registration.php"> Register </a></li>

				</ul>
			
			</nav>
	</header>

	<div class="login-page">
	<div class="form">
		<img src="avatar.png" class="avatar">
		<form class="login-form" action="index.php" method="POST">
		<p><strong>Username</strong></p>
		<input type="text" name="username" placeholder="Enter Username">
		<p><strong>Password</strong></p>
		<input type="Password" name="password" placeholder="Enter Password">
		<button>Login</button>
		<p class="message">Don't have an account? <a href="#">Register</a></p>
		</form>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<script>
	$('.message a').click(function(){
	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");});
	</script>

</body>
</html>