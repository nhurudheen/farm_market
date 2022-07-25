<?php
session_start();
require_once "connection.php";
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
$user_id=$_SESSION['id'];
$grand_total = 0;
$allItems = "";
$items = array();
$user_id=$_SESSION['id'];
$select_stmt=$db->prepare("SELECT CONCAT(quantity, '&nbsp;&nbsp;',product_size,'&nbsp;&nbsp;',product_name, '&nbsp;&nbsp;from &nbsp;', farmer_name) AS ItemQty, total_price FROM cart  where user_id ='$user_id'");
$select_stmt->execute();  
while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
{
	$grand_total = $grand_total + $row["total_price"];
	$items[] = $row["ItemQty"];
}
$allItems = implode("<li><a>", $items);

?>
<?php

include('header.php');
include('category.php');
?>
<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Checkout</li>
			</ul>
		</div>
	</div>
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form action="finalpage.php"  method="post" enctype="multipart/form-data">
					<div class="col-md-6">
						<div class="billing-details">
							
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<input type="text" value="<?php
        echo date(DATE_RFC822);                                                  
        ?>" name="date" hidden>
							<input type="text" name="order_no" hidden value="<?php
       function random_code ($limit)
       {
           return substr(base_convert (sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
       }
        echo random_code(5);                                                   
        ?>" >
						<input type="hidden" name="products" value="<?php echo $allItems ?>">
			
				<input type="hidden" name="grand_total" value="<?php echo $grand_total ?>">
							<?php
						$user_id=$_SESSION['id'];
						$select_stmt=$db->prepare("SELECT * FROM user_profile where id ='$user_id'");
						$select_stmt->execute();
						
						while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
						{
						?>
							<div class="form-group">
								
								<input class="input" type="text" name="user_id" hidden  required  value="<?php echo $row["id"]; ?>">
								<input class="input" type="text" name="firstname" value="<?php echo $row["firstname"]; ?>" readonly required placeholder="FIRST NAME">
							</div>
							<div class="form-group">
								<input class="input" readonly required type="text" name="lastname" value="<?php echo $row["lastname"]; ?>" placeholder="LAST NAME">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="<?php echo $row["email"]; ?>" placeholder="EMAIL">
							</div>
							<div class="form-group">
								<input class="input" required type="text" name="address"  value="<?php echo $row["address"]; ?>"placeholder="ADDRESS">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="phoneno" value="<?php echo $row["phoneno"]; ?>"  required placeholder="PHONE NUMBER">
							</div>
								<?php
						}
						?> 
							
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods" style="padding-bottom:5px">
							<div class="section-title">
								<h4 class="title">PRODUCT AND QUANTITY ORDER</h4>
							</div>
							<div class="col-md-12 list-links" style="font-size:15px" > <li><a><?php echo $allItems; ?></a></li></div>
						<p>.</p>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">PAYMENT AND SHIPPING METHODS</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping -  &#35; 0.00</label>
								<div class="caption">
									<p>Farm products for free shiping takes 5-6 days to deliver, but products are carted out freshly on the day of delivery directly from the farm.
										<p>
								</div>
							</div>
							
							<div class="input-checkbox">
								<input type="radio"  checked name="payments" id="payments-2">
								<label for="payments-2">Payment on Delivery</label>
								<div class="caption">
									<p>For easy and plain transformation, Products are meant to be payed for after customer received there products and they are satisifed with it.
										<p>
								</div>
							</div>
							<p style="font-size:30px; text-transform:uppercase"><b><em>Total Amount:<?php echo number_format($grand_total,2)?></em></b></p>
						</div>
					</div>
<div class ="col-md-12" style="padding-bottom: 40px">
					<div class="row">
	<div class="col-md-4"></div>
						<div class="col-md-4"><div class="pull-right">
								<button type="submit" name="submit" class="primary-btn">Place Order</button>
							</div></div>
						<div class="col-md-4"></div>
	</div>
					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
<script src="js/jquery1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$("#placeOrder").submit(function(e){
			
			e.preventDefault();
			
			$.ajax({
				url: "action.php",
				method: "post",
				data: $("form").serialize()+"&action=order",
				success: function(response){
					$("#showOrder").html(response);
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
	
<?php include ('footer.php');?>