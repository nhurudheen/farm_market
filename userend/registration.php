<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
    session_start();
    session_unset();
    session_destroy();
header('location:registration.php');
    }
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Farm Market | REGISTRATION</title>
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
				<form class="login100-form validate-form" method="post" action="regaction.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register New User
					</span>
<div class="wrap-input100 validate-input" data-validate = "Enter firsname">
						<input class="input100" id="firstname" type="text" name="firstname" placeholder="First Name" required="true" >
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter LastName">
						<input class="input100" id="lastname" type="lastname" name="lastname" placeholder="Last Name" >
						<span class="focus-input100" data-placeholder="&#xf1a6;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Phone Number">
						<input class="input100" id="phoneno" type="text" name="phoneno" placeholder="Phone Number" required="true">
						<span class="focus-input100" data-placeholder="&#xf2c8;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Address">
						<input class="input100" id="address" type="address" name="address" placeholder="Enter address" required="true">
						<span class="focus-input100" data-placeholder="&#xf175;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" style="text-transform:lowercase" id="email" required="true" type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
						<span class="focus-input100" data-placeholder="&#xf159;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" required="true" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;" type="password" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}"></span>
					</div>



					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button> 
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