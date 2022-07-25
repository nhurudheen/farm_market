<?php
session_start();
require_once "connection.php";

if(isset($_POST["pid"]) && isset($_POST["psize"]) && isset($_POST["pfname"]) && isset($_POST["pname"]) && isset($_POST["pprice"]) && isset($_POST["pimage"]) && isset($_POST["pcode"]))
{
	$id		= $_POST["pid"];
	$size 	= $_POST["psize"];
	$fname 	= $_POST["pfname"];
	$name 	= $_POST["pname"];
	$price 	= $_POST["pprice"];
	$image 	= $_POST["pimage"];
	$code 	= $_POST["pcode"];
	$user 	= $_POST["puser"];
	$qty = 1 ;
	
	$select_stmt=$db->prepare("SELECT * FROM cart WHERE product_code=:code and user_id=:user");
	$select_stmt->execute([":code"=>$code, ":user"=>$user]);  
	$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
	
	$check_code = $row["product_code"] && $row["user_id"];
		
	if(!$check_code)
	{
		$insert_stmt=$db->prepare("INSERT INTO cart(product_size,
													farmer_name,
													product_name,
													product_price,
													product_image, 
													quantity,
													total_price,
													product_code,
													user_id) 
												VALUES
													(:size,
													:fname,
													:name,
													:price,
													:image,
													:qty,
													:ttl_price,
													:code,
													:user)"); 					
		$insert_stmt->bindParam(":size",$size);	
		$insert_stmt->bindParam(":fname",$fname);	
		$insert_stmt->bindParam(":name",$name);	
		$insert_stmt->bindParam(":price",$price);	
		$insert_stmt->bindParam(":image",$image);	
		$insert_stmt->bindParam(":qty",$qty);	 
		$insert_stmt->bindParam(":ttl_price",$price);	
		$insert_stmt->bindParam(":code",$code);		
		$insert_stmt->bindParam(":user",$user);	
		$insert_stmt->execute();
				
		echo '<div class="alert alert-success alert-dismissible mt-2">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Item added to your cart</strong> 
			  </div>';				
	}
	else
	{
		echo '<div class="alert alert-danger alert-dismissible mt-2">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Item already added to your cart!</strong> 
			  </div>';
	}
}

if(isset($_GET["cartItem"]) && isset($_GET["cartItem"])=="cart_item")
{
	$user_id=$_SESSION['id'];
	$select_stmt=$db->prepare("SELECT * FROM cart where user_id ='$user_id' ");
	$select_stmt->execute();  
	$row=$select_stmt->rowCount();
	echo $row;
}

if(isset($_GET["remove"]))
{
	$id = $_GET["remove"];
	$delete_stmt = $db->prepare("DELETE FROM cart WHERE cart_id =:cid");
	$delete_stmt->execute(array(":cid"=>$id));
	
	$_SESSION["showAlert"] = "block";	
	$_SESSION["message"] = "Item removed from the cart";
	header("location:checkout.php");
}

if(isset($_GET["clear"]))
{
	$user_id=$_SESSION['id'];
	$id = $_GET["clear"];
	$delete_stmt = $db->prepare("DELETE FROM cart where user_id ='$user_id' ");
	$delete_stmt->execute();
	
	$_SESSION["showAlert"] = "block";	
	$_SESSION["message"] = "All item removed from the cart";
	header("location:checkout.php");
}

if(isset($_GET["cleara"]))
{
	$user_id=$_SESSION['id'];
	$id = $_GET["cleara"];
	$delete_stmt = $db->prepare("DELETE FROM cart where user_id ='$user_id'");
	$delete_stmt->execute();
	
	$_SESSION["showAlert"] = "block";	
	$_SESSION["message"] = "All item removed from the cart";
	header("location:index.php");
}

if(isset($_POST["pqty"]))
{
	$qty	= $_POST["pqty"];
	$id		= $_POST["pid"];
	$price	= $_POST["pprice"];
	
	$total_price = $qty * $price;
	
	$update_stmt=$db->prepare("UPDATE cart SET quantity=:qty, total_price=:ttl_price WHERE cart_id=:cid");
	$update_stmt->execute(array(":qty"=>$qty, 
								":ttl_price"=>$total_price, 
								":cid"=>$id));
}
if(isset($_POST["action"]) && isset($_POST["action"])=="order")
{
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$phoneno = $_POST["phoneno"];
	$address = $_POST["address"];
	$order_no = $_POST["order_no"];
	$products = $_POST["products"];
	$grand_total = $_POST["grand_total"];
	
	$data = "";
	
	$insert_stmt=$db->prepare("INSERT INTO orders(firstname, 
												  lastname,
												  email,
												  phoneno, 
												  address,
												  order_no,
												  products,
												  grand_total) 
											VALUES
												 (:firstname,
												  :lastname,
												  :email,
												  :phoneno,
											      :address,
												  :order_no
												  :products,
												  :grand_total)"); 					
	$insert_stmt->bindParam(":firstname",$firstname);
	$insert_stmt->bindParam(":lastname",$lastname);
	$insert_stmt->bindParam(":email",$email);	
	$insert_stmt->bindParam(":phoneno",$phoneno);	
	$insert_stmt->bindParam(":address",$address);	 
	$insert_stmt->bindParam(":order_no",$order_no);	
	$insert_stmt->bindParam(":products",$products);	
	$insert_stmt->bindParam(":grand_total",$grand_total);	
	$insert_stmt->execute();
	
	$data.='<div class="text-center">
				<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
				<h2>Your Order Placed Successfully! for </h2>
				<h4 class="bg-danger text-light rounded p-2">Items Purchased : '.$products.'</h4><br><br>
				<h4>Your Order Number is  : '.$order_no.' </h4>			
						
				<h4>Total Amount Paid : '.number_format($grand_total,2).' </h4>					
				
			</div>';
			
	echo $data;		
}
?>