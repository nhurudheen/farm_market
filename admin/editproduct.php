<?php

session_start();
include("connection.php");
extract($_REQUEST);
$id=$_GET['product_code'];
$q=mysqli_query($db_connect,"select * from products where product_code='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update products SET farm_name='$farm_name',product_code='$product_code',product_name='$product_name',category='$category',price='$price',formerprice='$formerprice',size='$size',quantity='$quantity',expiry_date='$expiry_date',receive_date='$receive_date', product_category='$product_category',description='$description'  where product_code='$id'";	
mysqli_query($db_connect,$query);
header('location: productdetails.php');	
	
	}
?>
   <html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FARM MARKET| Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
   <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">ADMIN Function</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Farmers</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Customer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="adminprofile.php"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                

                </div>
            </div>
        
        </header>
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>MAKE CHANGES TO FARM PRODUCTS</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li class="active">FARM MARKET</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<br><br>
     <div class="col-md-12">
        <div class="row">
         <div class="col-lg-2"></div>
              <div class="col-lg-8" >
        <div class="card" style="background-image:url(images/bg.jpg)">
          <div class="card-header">
                   <strong>EDIT PRODUCTS</strong>
                                                    </div>
             <form name="form1" action="" method="post">
             <div class="card-body card-block">
<div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Category </b></label>  <select name="product_category" id="inputIsInValid" class="is-invalid form-control-success form-control" style="text-transform:uppercase">
                     
        <option value="<?php echo $res['product_category'];?>" ><?php echo $res['product_category'];?></option>
                     <option value="bulkproduct">BULK PRODUCTS</option>
                     <option value="singleproduct">SINGLE PRODUCTS</option>
                   
                     </select></div>		
           <div class="has-success form-group"><label for="inputIsValid" class=" form-control-label"><b>Farm Name</b></label>
               <input type="text" value="<?php echo $res['farm_name'];?>" id="InputIsValid" class="is-valid form-control" name="farm_name">
              </div>
        <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product CODE</b></label><input type="text" id="inputIsInvalid" name="product_code" value="<?php echo $res['product_code'];?>" readonly class="is-invalid form-control"></div>
                
          <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Name</b></label><input type="text" value="<?php echo $res['product_name'];?>" name="product_name" id="inputIsValid"  class="is-valid form-control"></div>  
                  <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Types</b></label>  <select name="category" id="inputIsInValid" class="is-invalid form-control-success form-control" style="text-transform:uppercase">
                     
        <option value="<?php echo $res['category'];?>" ><?php echo $res['category'];?></option>
                     <option value="FRUIT">FRUIT</option>
                     <option value="VEGETABLES">VEGETABLES</option>
                     <option value="CEREALS">CEREALS</option>
                     <option value="GRAIN">GRAIN</option>
                      <option value="TUBERS">TUBERS</option>
                      <option value="CASH CROPS">CASH CROPS</option>
                      <option value="FOOD CROPS">FOOD CROPS</option>
                     </select></div>
                    <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Price</b></label><input type="text" name="price" id="inputIsValid" value="<?php echo $res['price'];?>"  class="is-valid form-control"></div>  
				 
                    <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Former Price</b></label><input type="text" name="formerprice" id="inputIsValid" value="<?php echo $res['formerprice'];?>"  class="is-valid form-control"></div>  
                 <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Size </b></label>  <select name="size" id="inputIsInValid" class="is-invalid form-control-success form-control" style="text-transform:uppercase">
                     
        <option value="<?php echo $res['size'];?>"  ><?php echo $res['size'];?></option>
                     <option value="SMALL">Small</option>
                     <option value="MEDIUM">Medium</option>
                     <option value="LARGE">Large</option>
                     <option value="XTRA LARGE">XLarge</option>
                     </select></div>
          <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Quantity</b></label><input type="text" value="<?php echo $res['quantity'];?>" name="quantity" id="inputisValid" class="is-valid form-control"></div>
				  <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Product Description</b></label><textarea type="text" name="description" id="textarea-input inputisValid" rows="6" class="is-valid form-control"><?php echo $res['description'];?></textarea></div>
            <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Expiry Date</b></label><input type="text" value="<?php echo $res['expiry_date'];?>" name="expiry_date" id="inputisInvalid" class="is-invalid form-control"></div>
                 
             <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Date of Receive</b></label><input type="text" name="receive_date" id="inputisValid" value="<?php echo $res['receive_date'];?>" class="is-valid form-control"></div>
                 <div class="form-group">
                 <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-camera"><b>Note: Image canot be edit or change, Delete the product and re-add</b></i></div>
              
     </div>
                </div>
                  <div class="form-actions form-group">  <button name="update" onclick="alert('DATA CHANGE SUCCESSFULL')" type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> CHANGE PRODUCT
                                                        </button>
                 
                 </div>                      </div>
                  </form>
                                                </div>
           
                                            </div>
            <div class="col-lg-2"></div>
         </div>    
    </div>

<?php
include('footer.php');
?>