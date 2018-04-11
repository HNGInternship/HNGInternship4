<!DOCTYPE html>
<html>
<head>
	<title>HNG 4.0</title>
	<link href="https://fonts.googleapis.com/css?family=Saira:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/hng-login-page.css">
</head>
<body>
	<div id="header">
		<h1>Welcome To HNG Internship 4.0</h1>
	</div>
	
	<div id="container">
		<h2>LOGIN</h2>
		<form>
			<p><label>Email</label></p>
			<p><input type="email" name="email"></p>
			<p><label>Password</label></p>
			<p><input type="password" name="password"></p>

			<p><a href="#">Forgot Password?</a></p>
			<button>Login</button>
			<p class="footer">Haven’t created an account yet? <a href="#">Sign Up</a></p>
		</form>
	</div>
	<p id="time">
		<?php
			date_default_timezone_set("Africa/Lagos");
			// date_default_timezone_set("Asia/Bangkok");
			echo date("d/m/y   h:m A");
		?>
	</p>
	
</body>
</html>