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
				<li class="active">FRUIT</li>
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
						<h3 class="aside-title">Filter By Size:</h3>
						<ul class="size-option">
							<li class="active"><a href="#">S</a></li>
							<li class="active"><a href="#">L</a></li>
							<li class="active"><a href="#">XL</a></li>
							<li><a href="#">SL</a></li>
						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
				<div class="aside">
						<h3 class="aside-title">Filter by farmer</h3>
						<ul class="list-links">
							<?php
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM farmersprofile");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
							<li><a href="#"><?php echo $row['farm_name']; ?></a></li>
							<?php
		}
		?>			
						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
					
				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							
							<div class="sort-filter">
								<input type="text" class="input" placeholder="Enter any FRUIT name">
								
							</div>
							<div class="row-filter">
								
								<a href="search.php" class="active"><i class="fa fa-search"></i></a>
							</div>
						</div>
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
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM products WHERE category='fruit'");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
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
    $user_id=$_SESSION['id'];  echo $user_id;   ?>">
					<input type="hidden" class="pid" value="<?php echo $row['id']; ?>">
					<input type="hidden" class="psize" value="<?php echo $row['size']; ?>">
					<input type="hidden" class="pfname" value="<?php echo $row['farm_name']; ?>">
					<input type="hidden" class="pname" value="<?php echo $row['product_name']; ?>">
					<input type="hidden" class="pprice" value="<?php echo $row['price']; ?>">
					<input type="hidden" class="pimage" value="<?php echo $row['image']; ?>">
					<input type="hidden" class="pcode" value="<?php echo $row['product_code']; ?>">
									<div class="product-btns">
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

