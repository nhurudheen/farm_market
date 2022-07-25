<?php

session_start();
?>

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
	<!-- HEADER --><header>
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
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Log Out</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create an Account</a></li>
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
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> Track Order</a></li>
							
								<li><a href="logout.php"><i class="fa fa-unlock-alt"></i> Log Out</a></li>
								<li><a href="logout"><i class="fa fa-user-plus"></i> Create an Account</a></li>
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
<?php
include ('category.php');
?>
	<!-- /HEADER -->


	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div style="display:<?php if(isset($_SESSION["showAlert"])){echo $_SESSION["showAlert"];} 
	else { echo "none"; } unset($_SESSION["showAlert"])?>" class="alert alert-success alert-dismissible mt-2">
	
	<button type="button" class="close" data-dismiss="alert">&times;</button>
		
	<strong><?php if(isset($_SESSION["message"])){echo $_SESSION["message"];} unset($_SESSION["showAlert"]);?></strong> 
		
	</div>
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">
					
					<div class="col-md-12">
						<!--start here-->
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right">
							<a href="action.php?clear=all" onClick="return confirm('Are you sure to clear you cart?');" class="btn btn-sm btn-danger">EMPTY CART</a></th>
									</tr>
								</thead>
								<tbody>
									<?php
						require_once "connection.php";
						$user_id=$_SESSION['id'];
						$select_stmt=$db->prepare("SELECT * FROM cart where user_id ='$user_id'");
						$select_stmt->execute();
						$grand_total = 0;
						while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
						{
						?>
									<tr>
										<td class="thumb"><img src="../admin/<?php echo $row["product_image"]; ?>" alt=""></td>
										<td class="details">
											<a href="#"><?php echo $row["product_name"]; ?></a>
											<ul>
												<li><span>Size: <?php echo $row["product_size"]; ?></span></li>
												<li><span>Farmers Name: <?php echo $row["farmer_name"]; ?></span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>&#35;<?php echo number_format( $row["product_price"],2); ?> </strong><br></td>
										<td class="qty text-center"><input class="input itemQty" type="number" value="<?php echo $row['quantity']; ?>"></td>
										<td class="total text-center"><strong class="primary-color">&#35; <?php echo number_format($row["total_price"],2); ?></strong></td>
										<td class="text-right"><a href="action.php?remove=<?php echo $row["cart_id"];?>" onClick="return confirm('Are you sure want to remove this item?');"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> </td>
										<input type="hidden" class="pid" value="<?php echo $row["cart_id"]; ?>"> 
							<input type="hidden" class="pprice" value="<?php echo $row["product_price"]; ?>">
							
							<?php $grand_total +=$row["total_price"]; ?>
									</tr>
								<?php
						}
						?> 
								
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total"> &#35; <?php echo number_format($grand_total,2); ?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">&#35;<?php echo number_format($grand_total,2); ?></th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<a href="clearorde.php" class="primary-btn text-uppercase <?=($grand_total > 1)?"":"disabled"; ?>"> Checkout </a>
							</div>
						</div>
<!--end here -->
					</div>
				
					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shiping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shipping -  &#35;0.00</label>
								<div class="caption">
									<p>Item selected for free shipping takes a duration of 2-4 days before its been processed and Deliver.<br>
Fast Farm will ensure your products are well packed, secured and intact
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Standard - &#35; 500.00</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>
					</div>	
<div class="col-md-6">
						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Direct Bank Transfer</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Cheque Payment</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="" id="payments-3">
								<label for="payments-3">Paypal System</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										<p>
								</div>
							</div>
						</div>
					</div>

				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
<script src="js/jquery1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){ 
	
		$(".itemQty").on("change", function(){
			
			var hide = $(this).closest("tr");
			
			var id = hide.find(".pid").val();
			var price = hide.find(".pprice").val();
			var qty = hide.find(".itemQty").val();
			location.reload(true);
			$.ajax({
				url: "action.php",
				method: "post",
				cache: false,
				data: {pqty:qty, pid:id, pprice:price},
				success:function(response){ 
					console.log(response);		
				}
			});
		});
		
		load_cart_item_number();
		
		function load_cart_item_number(){
			$.ajax({
				url: "action.php",
				method: "get",
				data: {cartItem:"cart_item"},
				success:function(response){
					$("#cart-item").html(response);
				}
			});
		}	
	});
  </script>
	<!-- FOOTER -->
	<?php include ('footer.php');?>