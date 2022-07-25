<?php

session_start();
 require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
include('header.php');

include ('category.php');
?>
<link href="css/profilecss.css" rel="stylesheet">
<style>
#order-heading {
    background-color: #edf4f7;
    position: relative;
    border-top-left-radius: 25px;
    max-width: 800px;
    padding-top: 20px;
    margin: 30px auto 0px
}

#order-heading .text-uppercase {
    font-size: 17px;
    color: #777;
    font-weight: 600
}

#order-heading .h4 {
    font-weight: 600
}

#order-heading .h4+div p {
    font-size: 17px;
    color: #777
}

.close {
    padding: 10px 15px;
    background-color: #777;
    border-radius: 50%;
    position: absolute;
    right: -15px;
    top: -20px
}

.wrapper {
    padding: 0px 50px 50px;
    max-width: 800px;
    margin: 0px auto 40px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px
}

.table th {
    border-top: none
}

.table thead tr.text-uppercase th {
    font-size: 17px;
    padding-left: 0px;
    padding-right: 0px
}

.table tbody tr th,
.table tbody tr td {
   font-size: 17px;
    padding-left: 0px;
    padding-right: 0px;
    padding-bottom: 5px
}

.table-responsive {
    height: 100px
}

.list div b {
  font-size: 17px;
}

.list .order-item {
    font-weight: 600;
    color: #6db3ec
}

.list:hover {
    background-color: #f4f4f4;
    cursor: pointer;
    border-radius: 5px
}

label {
    margin-bottom: 0;
    padding: 0;
    font-weight: 900
}

button.btn {font-size: 17px;
    background-color: #66cdaa
}

button.btn:hover {
    background-color: #5cb99a
}

.price {
    color: #5cb99a;
    font-weight: 700
}

p.text-justify {
    font-size: 17px;
    margin: 0
}

.row {
    margin: 0px
}

.subscriptions {
    border: 1px solid #ddd;
    border-left: 5px solid #ffa500;
    padding: 10px
}

.subscriptions div {
  font-size: 17px;
}
</style>
     <script type='text/javascript' src="js/profilejquery.min.js"> </script>
    <script type='text/javascript' src="js/profilebundle.min.js" ></script>
  <script type='text/javascript'></script>
<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Profile</li>
			</ul>
		</div>
	</div>
<div class="container">
<div class="row" style="padding-top:20px;padding-bottom:150px">
	<div class="col-md-1"></div>
	<div class="col-md-10">  <section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-md-10">
        				<div class="c_details_img">
        					<img class="img-fluid" src="img/courses/course-details.jpg" alt="">
        				</div>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false"><h3 class="footer-header" style="font-size:18px;color:#22B573">PROFILE</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h3 class="footer-header" style="font-size:18px;color:#22B573">TRACK ORDER</h3></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><h3 class="footer-header" style="font-size:18px;color:#22B573">VIEW PAST ORDER</h3></a>
							</li>
							
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="objctive_text">
										<div class="col-md-12">
						<div class="billing-details">
							
							<div class="section-title">
								<h3 class="title">DETAILS</h3>
							</div>
					
							<?php
						$user_id=$_SESSION['id'];
						$select_stmt=$db->prepare("SELECT * FROM user_profile where id ='$user_id'");
						$select_stmt->execute();
						
						while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
						{
						?>
							 
    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> <b>SURNAME</b> <br><?php echo $row["firstname"]; ?></div>
        <div><b>OTHER NAME</b> <br><?php echo $row["lastname"]; ?> </div>
		<div></div>
    </div><div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
      <div> <b>PHONE NUMBER</b> <br><?php echo $row["phoneno"]; ?></div>
        <div><b>EMAIL</b> <br><?php echo $row["email"]; ?> </div>
		<div></div>
		
    </div>
								<div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
       <div> <b>HOME ADDRESS</b> <br><?php echo $row["address"]; ?></div>
		
    </div>	<?php
						}
						?> 
											</div>
										
					</div>	<div class="col-md-6">
						<div class="billing-details">
							
						<div class="section-title">
								<h3 class="title">CHANGE PASSWORD</h3>
							</div>
                    <form method="post" action="profileupdate.php">
							<div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="input" name="oldPassword" placeholder="Old Password">
                        </div>
						 <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="input" name="newPassword" placeholder="New Password">
                        </div>
                            <div class="form-group">
                                <label>Re type Password</label>
                                <input type="password" class="input" name="retype" placeholder="Re-type new password">
                        </div>
						  <button type="submit" class="primary-btn submit_btn">Change Password</button>
                               
                    </form>
							
						</div>
					</div>	
							
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								 <div class="blog-details-text">
                       
                       <div class="footer">
						<p style="font-size:18px">Kindly enter your product number to know the status of your farm products</p>
						<form action="" method="post" class="comment-form">
							<div class="form-group">
								<input class="input" name="order_no" placeholder="Enter Order Number">
							</div>
							<button type="submit" name="search" class="primary-btn">TRACK</button>
						</form>
					</div>
				<?php
		require_once "connection.php";
	 if(isset($_POST['search']))
        {
		
         $id = $_POST['order_no'];
		$select_stmt=$db->prepare("SELECT * FROM orders where order_no='$id' ");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
                       
									 
                            <div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
    <div class="text-uppercase">
        <p style="font-size:20px">Order detail</p>
    </div>
    <div class="h4"><?php
        echo date(DATE_RFC822);                                                  
        ?></div>
    <div class="pt-1">
        <p style="font-size:20px">Order <?php echo $row['order_no'] ?> is currently<b class="text-dark"> processing</b></p>
    </div>
    <div class="btn close text-white"> &times; </div>
</div>
<div class="wrapper bg-white">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col">product</th>
                    <th scope="col" class="text-right">total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['products'] ?></th>
                    <td class="text-right"><b>&#35;<?php echo $row['grand_total'] ?></b></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
									<div class="col-md-12"><div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-10"><div class="d-flex justify-content-start align-items-center pl-3">
        <div class="text-muted">Payment Method</div>
        <div class="ml-auto">  <label>Payment on Delivery</label> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center py-1 pl-3">
        <div class="text-muted">Shipping</div>
        <div class="ml-auto"> <label>Free</label> </div>
    </div>
    <div class="d-flex justify-content-start align-items-center pb-4 pl-3 border-bottom">
        <div class="text-muted"> <button class="text-white btn">TOTAL PRICE</button> </div>
        <div class="ml-auto price" style="font-size: 18px;">&#35;<?php echo $row['grand_total'] ?> </div>
    </div>
   
    <div class="row border rounded p-1 my-3">
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b>Billing Address</b>
                <p class="text-justify pt-2"><?php echo $row['address'] ?></p>
            </div>
        </div>
        <div class="col-md-6 py-3">
            <div class="d-flex flex-column align-items start"> <b>Shipping Address</b>
                <p class="text-justify pt-2"><?php echo $row['address'] ?></p>
            </div>
        </div>
    </div>
    <div class="pl-3 font-weight-bold">Related Order Details</div>
    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> <b>PENDING CONFIRMATION</b> <br><?php echo $row['pending'] ?></div>
        <div><?php echo $row['pendingdate'] ?></div>
		
    </div><div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> <b>SHIPPED</b> <br><?php echo $row['shipped'] ?></div>
        <div><?php echo $row['shippeddate'] ?></div>
		
    </div>
								<div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> <b>DELIVERED</b> <br><?php echo $row['deliverystatus'] ?></div>
        <div><?php echo $row['deliverydate'] ?></div>
		
    </div></div>
										<div class="col-md-1"></div>
										</div> </div>
    
                           <?php
            }
	 }
        
?>
                    </div>
                
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
									<div class="col-md-12">
						<div class="billing-details">
							
							<div class="section-title">
								<h3 class="title">PREVIOUS ORDERS</h3>
							</div>
					
							<?php
						$user_id=$_SESSION['id'];
						$select_stmt=$db->prepare("SELECT * FROM orders where user_id ='$user_id'");
						$select_stmt->execute();
						
						while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
						{
						?>
							 
    <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        <div> <b>ORDER NUMBER</b> <br><?php echo $row["order_no"]; ?> <br><br><b>PRODUCTS ORDER</b> <br><?php echo $row["products"]; ?></div>
        <div><b>DATE OF ORDER</b> <br><?php echo $row["date"]; ?> <br><br> <b>PRICE</b> <br><?php echo $row["grand_total"]; ?><br><br><b>ORDER STATUS </b><br><?php echo $row["deliverystatus"]; ?> &nbsp;&nbsp;&nbsp; on <?php echo $row["deliverydate"]; ?></div>
		<div></div>
    </div>	<?php
						}
						?> 
											</div>
										
					</div>
								
</div>
							
						
						</div>
					</div>
				</div>
		</div>
        </section>
       </div>
	<div class="col-md-1"></div>
	</div>
</div>
		
<script src="js/jquery1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		$(document).on("click", "#addItem", function(e){	
			e.preventDefault();
			var form = $(this).closest(".form-submit");
			var id = form.find(".pid").val();
			var size = form.find(".psize").val();
			var fname = form.find(".pfname").val();
			var name = form.find(".pname").val();
			var price = form.find(".pprice").val();
			var image = form.find(".pimage").val();
			var code = form.find(".pcode").val();
			var user = form.find(".puser").val();
			$.ajax({
				url: "action.php",
				method: "post",
				data: {pid:id, psize:size, pfname:fname, pname:name, pprice:price, pimage:image, pcode:code, puser:user},
				success:function(response){
					$(".alert-message").html(response);
					window.scrollTo(0,0);
					load_cart_item_number();
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
<?php
include('footer.php');
?>
	
	<!-- FOOTER -->

