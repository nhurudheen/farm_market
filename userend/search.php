<?php

session_start();
include ('header.php');
include ('category.php');
?>
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				
				<li><a href="#">Products</a></li>
				<li class="active">ALL PRODUCTS</li>
			</ul>
		</div>
	</div>
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
					<!-- aside widget -->
				
					<!-- aside widget -->
				
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Search With</h3>
						  <div class="row">
                <form class="form-vertical" action="search.php" method="post">
                    <div class="form-group">
						<ul class="filter-list">
							<li><span class="text-uppercase" style="font-size:15px">PRODUCT NAME:</span></li> <br>
							<li><div class="sort-filter col-md-12">
								<input type="text" class="input" name="product_name" placeholder="Enter any farm product name">
								
							</div></li>
						</ul>
                        
                    </div>
					 <div class="form-group">
						<ul class="filter-list">
							<li><span class="text-uppercase" style="font-size:15px">FARMERS NAME:</span></li> <br>
							<li><div class="col-md-12">
								 <select name="farm_name" class="input">
                                 <option value="" selected hidden >Please select</option>
       													<?php
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM farmersprofile");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
							<option value="<?php echo $row['farm_name']; ?>"  > <?php echo $row['farm_name']; ?></option>
							<?php
		}
		?>			
                            </select>
								
								
							</div></li>
						</ul>
                        
                    </div>
					 <div class="form-group">
						<ul class="filter-list">
							<li><span class="text-uppercase" style="font-size:15px">product Categories</span></li> <br>
							<li><div class="col-md-12">
							  <input type="radio" value="singleproduct" name="product_category">Single Product <br>
                            <input type="radio" value="bulkproduct" name="product_category">Bulk Product<br>
                            <input type="radio" value="other" name="product_category" checked="true">Others	
								
								
							</div></li>
						</ul>
                        
                    </div>
					<div class="form-group">
						<ul class="filter-list">
							<li><span class="text-uppercase" style="font-size:15px">product type</span></li> <br>
							<li><div class="col-md-12">
						<select name="category" class="input">
                        <option value="" selected hidden  >Please select</option>
       						 <option value="FRUIT">FRUIT</option>
                     <option value="VEGETABLES">VEGETABLES</option>
                     <option value="CEREALS">CEREALS</option>
                     <option value="GRAIN">GRAIN</option>
                      <option value="TUBERS">TUBERS</option>
                      <option value="CASHCROPS&OTHERS">CASH CROPS</option>
                      <option value="SEAFOODS">SEA FOODS</option>
                            </select>
								
								
							</div></li>
						</ul>
                        
                    </div>
					 <div class="form-group">
						<ul class="filter-list">
							<li><span class="text-uppercase" style="font-size:15px">Price:</span></li> <br>
							<li><div class="sort-filter col-md-12">
								<input type="number" name="price" class="input" placeholder="Input the price of your choice">
								
							</div></li>
						</ul>
                        
                    </div>
                   
               <button class="primary-btn" type="submit" name="submit" >SEARCH</button>
                </form>
            </div>
           
					</div>
					<!-- /aside widget -->

					<!-- /aside widget -->

					<!-- aside widget -->
					
				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Show:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Page:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<!-- Product Single -->
													<?php
		include ("connection.php");
			    if(isset($_POST['submit'])){
                        $product_name = $_POST['product_name'];
                        $farm_name = $_POST['farm_name'];
						$product_category= $_POST['product_category'];
                        $category = $_POST['category'];
                        $price = $_POST['price'];
					
                        
                        
                        if($farm_name != "" || $product_name != "" || $category != "" || $price != "" || $product_category != "" ){
                         
                        $query = "SELECT * FROM products WHERE product_name = '$product_name' OR farm_name ='$farm_name' OR product_category = '$product_category' OR category ='$category' OR price = '$price'  ";
                        
                            $data = mysqli_query($con, $query) or die('error');
                            if(mysqli_num_rows($data) > 0){
                                while($row = mysqli_fetch_assoc($data)){
                                    $category = $row['category'];
                                    $id = $row['id'];
                                    $image = $row['image'];
                                    $price = $row['price'];
                                    $formerprice = $row['formerprice'];
                                    $product_name = $row['product_name'];
                                    $farm_name = $row['farm_name'];
                                    $size = $row['size'];
									$product_code = $row['product_code'];
									$product_category  = $row['product_category'];
									
                                ?>				
	
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<div class="product-label">
											<span>Category</span>
											<span class="sale"><?php echo $row['category']; ?></span>
										</div>
									<a href="productpage.php?pd=<?php echo $row['id']; ?>"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
									<img src="../admin/<?php echo $row['image']; ?>" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">&#35; <?php echo $row['price']; ?> <del class="product-old-price">&#35;<?php echo $row['formerprice']; ?></del></h3>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
											<h2 class="product-name"><a href="#"><?php echo $row['product_name']; ?></a></h2> <form class="form-submit">
											<input type="text" hidden class="puser" value="<?php
    $user_id=$_SESSION['id'];  echo $user_id;  ?>">
					<input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
					<input type="hidden" class="psize" value="<?php echo $row['size']; ?>">
					<input type="hidden" class="pfname" value="<?php echo $row['farm_name']; ?>">
					<input type="hidden" class="pname" value="<?php echo $row['product_name']; ?>">
					<input type="hidden" class="pprice" value="<?php echo $row['price']; ?>">
					<input type="hidden" class="pimage" value="<?php echo $row['image']; ?>">
					<input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">	<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-credit-card"></i></button>
								 <?php if(!isset($_SESSION['email'])){  ?>
										
										<button class="primary-btn"><a href="login.php"><i class="fa fa-shopping-cart"></i> Add to Cart</a></button>
								  <?php
                                        } else{
                                                ?>
                                                 <button id="addItem" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                <?php
                                            }
                                        
                                        ?>
										</div>
										</form>
									</div>
								</div>
							</div>
						<div class="clearfix visible-sm visible-xs"></div>
		<?php
		}
							}
	
		  else{
                                ?>
							<p style="color: red; font-size:50px; align=center">Oops! PRODUCTS NOT FOUND</p>
   <?php
                            }
                        }
                    }
                ?>
							</div>
							<!-- /Product Single -->
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

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

