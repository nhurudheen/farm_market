<?php

session_start();
include("connection.php");
extract($_REQUEST);
$id=$_GET['order_no'];
$q=mysqli_query($db_connect,"select * from orders where order_no='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update orders SET pending='$pending',shipped='$shipped',deliverystatus='$deliverystatus',pendingdate='$pendingdate',shippeddate='$shippeddate',deliverydate='$deliverydate'where order_no='$id'";	
mysqli_query($db_connect,$query);
header('location: customerorder.php');	
	
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
                            <li><i class="fa fa-puzzle-piece"></i><a href="addnewfarmers.php">Add new farmer</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="farmersprofile.php">View farmers Profile</a></li>
                            <li><i class="fa fa-bars"></i><a href="editfarmer.php">Edit Farmers Profile</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Customer</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">View Customer Orders</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Update Customer Orders</a></li>
							
                            <li><i class="fa fa-table"></i><a href="tables-data.html">View Customer rating</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="addnewproduct.php">Add New Products</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="productdetails.php">View Products</a></li>
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
                           
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
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
                        <h1>UPDATE CUSTOMER ORDER</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
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
  <div class="card-header"><b>CUSTOMER ORDER</b></div>
        <div class="card-body card-block">
     <form name="reg" action="" method="post" >
        
                <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Order Number</b></label><input type="text" readonly name="order_no" id="inputisInvalid" value="<?php echo $res['order_no'];?>" class="is-invalid form-control"></div>
                 
             <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Pending Confirmation</b></label><input type="text" name="pending" id="inputisValid" value="<?php echo $res['pending'];?>" class="is-valid form-control"></div>
		  <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Date of Confirmation</b></label><input type="date" name="pendingdate" value="<?php echo $res['pendingdate'];?>" id="inputisValid" class="is-valid form-control"></div>
          <div class="has-warning form-group"><label for="inputIsInvalid" class=" form-control-label"><b>Shipped</b></label><input type="text" name="shipped" value="<?php echo $res['shipped'];?>" id="inputisInvalid" class="is-invalid form-control"></div>
            <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Date  Shipped</b></label><input type="date" name="shippeddate" value="<?php echo $res['shippeddate'];?>"  id="inputisValid"  class="is-valid form-control"></div>
             <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Delivered</b></label><input type="text" name="deliverystatus" id="inputisValid" value="<?php echo $res['deliverystatus'];?>" class="is-valid form-control"></div>
		 
		  <div class="has-warning form-group"><label for="inputIsValid" class=" form-control-label"><b>Date Delivered</b></label><input type="date" name="deliverydate" value="<?php echo $res['deliverydate'];?>" id="inputisValid" class="is-valid form-control"></div>
        
                 
            
          <div class="form-actions form-group">  <button name="update" type="submit" class="btn btn-primary btn-sm"  onclick="alert('DATA CHANGE SUCCESSFULL')">
                        <i class="fa fa-pencil"></i> UPDATE CUSTOMER ORDER
                                                        </button>
                 
                                                    </div>
               </form>
                                                        </div>
                                                    </div>
                                                </div>
            <div class="col-lg-2"></div>
         </div>    
    </div>

<?php
include('footer.php');
?>