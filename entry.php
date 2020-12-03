<!DOCTYPE html>
<?php
if (isset($_GET['status']))
{
	if ($_GET['status']=="r") {
		# code...
		echo("<script type='text/javascript'> alert('Username already taken.'); </script>");
	}
	 if($_GET['status']=="l")
	{
		echo("<script type='text/javascript'> alert('Username or password incorrect !!!'); </script>");
	}
}

?>
<html>
<head>
	<title>Login and Registraion Form</title>
	<link rel='stylesheet' href="entry_style.css">
	<link href="home_style.css" rel="stylesheet">
</head>
<body >
	<!--<nav class="navbar navbar-expand-md navbar-light navbg sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="#"><img class="img-fluid" alt="Responsive image" src="img/logo3.png"></a>
	</div>
</nav>-->
	<div class='hero'>
		<br>
		<h1 id=entry_logo>Query Bank</h1>
		<div class='form-box'>
			<div class='button-box'>
				<div id='btn'></div>
				<button type='button' class='toggle-btn' onclick="login()"><font color= #c2c2a3>Login</font></button>
				<button type='button' class='toggle-btn' onclick="register()"><font color= #c2c2a3>Register</font></button>
			</div>
			<form class='box' id='login' action="login.php" method="POST">
				<input type="text" name="username" placeholder="Username" maxlength="15" required>
				<input type="password"  name="password" placeholder="Password" minlength="8" maxlength="20" required>
				<input type="submit" name="login" value="Login">
			</form>
			<form class='box' id='register' action="register.php" method="POST">
				<input type="text" name="fullname" placeholder="Full Name" maxlength="50" required>
				<input type="text"  name="username" placeholder="Username" maxlength="15" required>
				<input type="email" name="email" placeholder="E-mail" maxlength="50" required>
				<input type="password"  name="password" placeholder="Password" minlength="8" maxlength="20" required>
				<input type="submit" name="register" value="Register">
			</form>
		</div>
	</div>
	<script>
		var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');

		function register() {
			// body...
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}

		function login() {
			// body...
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0";
		}
	</script>
</body>
</html>