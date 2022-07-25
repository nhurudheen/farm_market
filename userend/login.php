<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Farm Market | LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginsheet/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginsheet/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginsheet/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginsheet/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="loginsheet/stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginsheet/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginsheet/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginsheet/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginsheet/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginsheet/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginsheet/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('loginsheet/images/bckgrd.png');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="loginaction.php">
					<span class="login100-form-logo">
						<i><img src="loginsheet/images/logo.png" class="login100-form-logo"> </i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" id="email" type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;" type="password" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button> 
					</div><br>
<div class="text-center" >
						<a class="txt1" href="registration.php">
							New User, SIGN UP
						</a>
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="loginsheet/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginsheet/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginsheet/vendor/bootstrap/js/popper.js"></script>
	<script src="loginsheet/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginsheet/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginsheet/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginsheet/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginsheet/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginsheet/js/main.js"></script>

</body>
</html>