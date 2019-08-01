<?php
require 'auth.php';



?>

<html>
<?php>
<head>
<title>Client Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	
	<div class="profile">
	<h2 align="center">Manage Your Profile</h2>
		<form class="profile-form">
			<label>
		  Full Name:
		  <input type="text" name="fullname" size="50" required maxlength="50">
		  </label>
		  <label>
		  Address:
		  <input type="text" name="address" size="100" required maxlength="100">
		  </label>
		  <label>
		  Address 2:
		  <input type="text" name="address" size="100" maxlength="100">
		  </label>
		  <label>
		  City:
		  <input type="text" name="city" size="100" required maxlength="100">
			</label>
			<label>
		  State:<br>
			<select required>
				<option value="" selected disabled hidden>Please select</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>
			</label>
			<label>
		  Zipcode:<br>
		  <input type="text" name="fullname" size="9" required minlength="5" maxlength="9">
		  </label>
		  <button>Update</button>
		</form>
	</div>

</body>

?>
</html>