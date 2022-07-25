
<?php
session_start();
include('header.php');
?>
	<!-- /HEADER -->
 
	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						
						<li><a href="cereals.php">CEREAL</a></li>
						<li><a href="grains.php">GRAIN</a></li>
						<li><a href="seafood.php">SEA FOODS</a></li>
						<li><a href="fruits.php">FRUIT</a></li>
						<li><a href="vegetables.php">VEGETABLE</a></li>
						
						<li><a href="tubers.php">TUBER</a></li>
						<li><a href="cashcrops.php">CASH CROPS AND OTHERS</a></li>
						
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="index.php">Home</a></li>
						
						<li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">LIST OF FARMERS <i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">TUBER FARMERS</h3></li>
											<li><a href="#">OYEBOLA FARM</a></li>
											<li><a href="#">KOLADE FARM</a></li>
											
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">CEREAL FARMERS</h3></li>
											<li><a href="#">TINUBU AND SONS FARM</a></li>
											<li><a href="#">K.F. ISHOLA FARMS</a></li>
											
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">SEA FOODS FARMERS</h3></li>
											<li><a href="#">EJA LONIBU FARM</a></li>
											<li><a href="#">Mama IDIAT FISH FARM</a></li>
											<li><a href="#">Deen Poultry </a></li>
											<li><a href="#">Bolaji and SOn Farm</a></li>
										</ul>
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="./img/banner05.jpg" alt="">
											<div class="banner-caption text-center">
												<h2 class="white-color">NEW COLLECTION</h2>
												<h3 class="white-color font-weak">HOT DEAL</h3>
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">PRODUCTS CATEGORIES<i class="fa fa-caret-down"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="tubers.php">
												<img src="img/tubersslide.png" alt="">
												<div class="banner-caption text-center">
													<h3 class=" text-uppercase">TUBERS</h3>
												</div>
											</a>
											<hr>
										</div>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="tubers.php">Yam</a></li>
											<li><a href="tubers.php">Cassava</a></li>
											<li><a href="tubers.php">Potato</a></li>
											<li><a href="tubers.php">Sweet Potato</a></li>
											<li><a href="tubers.php">Carrot</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="vegetables.php">
												<img src="img/Vegetableslide.png" alt="">
												<div class="banner-caption text-center">
													<h3 class="white-color text-uppercase">VEGETABLES</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="vegetables.php">Carrot</a></li>
											<li><a href="vegetables.php">Green Leaf</a></li>
											<li><a href="vegetables.php">Cabbage</a></li>
											<li><a href="vegetables.php">Cucumber</a></li>
											<li><a href="vegetables.php">Onions</a></li>
											<li><a href="vegetables.php">Others</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="fruits.php">
												<img src="img/fruitslide.png" alt="">
												<div class="banner-caption text-center">
													<h3 class="text-uppercase" style="color:wine ">FRUITS</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="fruits.php">Apples</a></li>
											<li><a href="fruits.php">Citrus</a></li>
											<li><a href="fruits.php">Water Melon</a></li>
											<li><a href="fruits.php">Banana</a></li>
											<li><a href="fruits.php">Others</a></li>
										</ul>
									</div>
									<div class="col-md-3">
										<div class="hidden-sm hidden-xs">
											<a class="banner banner-1" href="grains.php">
												<img src="img/whole%20grainsslide.png" alt="">
												<div class="banner-caption text-center">
													<h3 class="black-color text-uppercase">GRAINS</h3>
												</div>
											</a>
										</div>
										<hr>
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="grains.php">Rice</a></li>
											<li><a href="grains.php">Wheat</a></li>
											<li><a href="grains.php">Millet</a></li>
											<li><a href="grains.php">SoyaBeans</a></li>
											<li><a href="grains.php">Others</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">VIEW ALL PRODUCTS <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="singleproduct.php">Single Products</a></li>
								<li><a href="bulkproduct.php">Bulk Products</a></li>
							
							</ul>
						</li>
						<li><a href="contact.php">CONTACT US</a></li>
						
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img  src="img/Artboard%201.png" alt="">
						
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="img/Artboard%202.png" alt="">
					
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="img/Artboard%203.png"  alt="">
						
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="img/cat%20(4).png" alt="">
					
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="grains.php">
						<img src="img/cat%20(2).png" alt="">
						
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="seafood.php">
						<img src="img/cat%20(3).png" alt="">
						
					</a>
				</div>
				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">New Product in Stock</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				 
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="img/sidebar%20(2).png" alt="">
						
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->  
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<!-- Product Single -->
                     		<?php
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM products order by id desc LIMIT 6");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
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
									<h3 class="product-price">&#35; <?php echo $row['price']; ?>   <del class="product-old-price">&#35;<?php echo $row['formerprice']; ?> </del></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o empty"></i>
									</div>
									<h1 class="product-name"><a href="#"><?php echo $row['product_name']; ?></a></h1>
									 <form class="form-submit">
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
<?php
		}
		?>
							<!-- /Product Single -->

							<!-- Product Single -->
							<!-- /Product Single -->
						</div>
         
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

		

		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img  src="img/downbanner.jpg" alt="">
					
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="vegetables.php" >
						<img src="img/cat%20(5).png" alt="">
						
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="fruits.php" >
						<img src="img/cat%20(1).png" alt="">
						
					</a>
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<!-- tUBESR SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			
				<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<a href="tubers.php"><h2 class="title">TUBERS</h2></a>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="img/sidebar%20(4).png" alt="">
						
					</div>
				</div>
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
						
								<?php
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM products WHERE category='tubers' order by id desc LIMIT 6");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span>CATEGORY</span>
										<span class="sale"><?php echo $row['category']; ?></span>
									</div>
									<a href="productpage.php?pd=<?php echo $row['id']; ?>"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
									<img src="../admin/<?php echo $row['image']; ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price">&#35; <?php echo $row['price']; ?><del class="product-old-price">&#35;<?php echo $row['formerprice']; ?></del></h3>
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
							
					<?php
		}
		?>		

						</div>
					</div>
				</div>
			</div>
		
		</div></div>


<!-- fruit SECTION -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<a href="vegetables.php"><h2 class="title">VEGETABLES</h2></a>
					</div>
				</div>
				<!-- section title -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="img/sidebar%20(1).png" alt="">
						
					</div>
				</div>
				<!-- Product Single -->
				<?php
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM products WHERE category='vegetables' order by id desc LIMIT 3");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<a href="productpage.php?pd=<?php echo $row['id']; ?>"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							 <img src="../admin/<?php echo $row['image']; ?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">&#35;<?php echo $row['price']; ?> <del class="product-old-price">&#35;<?php echo $row['formerprice']; ?> </del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#"><?php echo $row['product_name']; ?></a></h2>
							 <form class="form-submit">
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
				<!-- /Product Single -->

			<?php
		}
		?>
			
			</div>
			<!-- /row -->

		
			<!-- CEREALS -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<a href="cereals.php"> <h2 class="title">CEREALS</h2></a>
					</div>
				</div>
				<!-- section title -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="img/Today's-Deal-copy.png" alt="">
						
					</div>
				</div>
				<!-- Product Single -->
							<?php
		require_once "connection.php";
		$select_stmt=$db->prepare("SELECT * FROM products WHERE category='cereals' order by id desc LIMIT 4");	
		$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
		{
		?>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<a href="productpage.php?pd=<?php echo $row['id']; ?>"><button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button></a>
							 <img src="../admin/<?php echo $row['image']; ?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">&#35;<?php echo $row['price']; ?> <del class="product-old-price">&#35;<?php echo $row['formerprice']; ?> </del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#"><?php echo $row['product_name']; ?></a></h2>
							 <form class="form-submit">
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
				<!-- /Product Single -->

			<?php
		}
		?>

			
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	
<!-- cereals SECTION -->

	<!-- section -->
	<!-- /section -->
		
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

