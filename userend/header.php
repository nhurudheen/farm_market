<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>FAST FARM MARKET</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">


	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
                				 
				</div>
				
  <div class="alert-message" style="text-transform:uppercase; align=center"></div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
					<form  action="search.php" >
							<input class="input search-input" type="text" placeholder="Enter any product Name">
						
						<a href="search.php"> <button class="search-btn"><i class="fa fa-search"></i></button></a>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					 <?php if(!isset($_SESSION['email'])){  ?>
					
					<ul class="header-btns">
						<!-- Account -->
						
						<!-- /Account -->

						<!-- Cart -->
                        <li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="login.php" class="text-uppercase ">Login</a>
							<ul class="custom-menu">
								<li><a href="login.php"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="login.php"><i class="fa fa-heart-o"></i> Track Order</a></li>
							
								<li><a href="login.php"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="registration.php"><i class="fa fa-user-plus"></i> Create an Account</a></li>
							</ul>
						</li>

						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
                    
									<span class="qty" >*</span>

								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>********</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
								
									<div class="shopping-cart-btns">
									
										<a href="login.php"><button class="primary-btn">LOG IN to View Cart <i class="fa fa-arrow-circle-right"></i></button></a>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
					<?php
} else{
	?>
					<ul class="header-btns">
						<!-- Account -->
						
						<!-- /Account -->

						<!-- Cart -->
                        <li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="logout.php" class="text-uppercase ">LogOut</a>
							<ul class="custom-menu">
								<li><a href="profile.php"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> Track Order</a></li>
							
								<li><a href="logout.php"><i class="fa fa-unlock-alt"></i> Log Out</a></li>
								<li><a href="registration.php"><i class="fa fa-user-plus"></i> Create an Account</a></li>
							</ul>
						</li>

						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
                    
									<span class="qty" id="cart-item"></span>

								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>********</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
								
									<div class="shopping-cart-btns">
									
										<a href="checkout.php"><button class="primary-btn">Checkout Products <i class="fa fa-arrow-circle-right"></i></button></a>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
					
					<?php
}
?>
				</div>
			</div>
			<!-- header -->
		</div>
		
		<!-- container -->
	</header>