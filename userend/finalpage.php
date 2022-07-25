<?php

session_start();
require_once "connection.php";
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
	$user_id=$_SESSION['id'];
?>
<?php

include('header.php');
include('category.php');
?>
<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Order Successful</li>
			</ul>
		</div>
	</div>
<div class="row" style="padding-top: 40px">
<div class="col-md-12">
	<div class="col-md-2"></div>
	<div class="col-md-4">
	 <?php
        // if submit button is clicked
        if (isset($_POST['submit'])) {
			
            $user_id = $_POST['user_id'];
            $order_no = $_POST['order_no'];
            $firstname = $_POST['firstname'];
             $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $phoneno = $_POST['phoneno'];
            $email = $_POST['email'];
           $products = $_POST['products'];
           $grand_total = $_POST['grand_total'];
			
           $date = $_POST['date'];
              
            
                // connect to database
               include "connection.php";

                // sql statment to insert the details
                $query = "INSERT INTO orders(user_id,order_no,firstname,lastname,address,phoneno,email,products,grand_total,date) VALUES('$user_id','$order_no', '$firstname', '$lastname', '$address', '$phoneno', '$email', '$products', '$grand_total', '$date')";
                // query the database;
                $result = $db->query($query);
			
    $user_id=$_SESSION['id'];
	$delete_stmt = $db->prepare("DELETE FROM cart where user_id ='$user_id'");
	$delete_stmt->execute();
			
            echo "<h2>Order Number: $order_no </h2>";
            echo  "<p><b>$firstname</b>, Thanks for your using our Market System,<br> Our Administration will put a call to you to validate your order. Kindly Notice that free delivery takes 4-5 days before order is processed.</p>";
            }
        
    ?>
		<br><br>
		<a href="index.php"><p style="font-size:30px">CONTINUE SHOPPING</p></a>
	</div>
	<div class="col-md-4"><img src="img/ThankYouDesign-GIF.gif"></div>
	<div class="col-md-4"></div>
	</div>
</div>
	<script src="js/jquery1.min.js"></script>
	
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