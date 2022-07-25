<?php
include('function.php');
user_session();
user_check("");
include('header.php');
?>

<!-- /header -->
         <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Welcome, <?php  echo  session_value("username");  ?></h1>
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

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">


                    <div class="col-md-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body pb-0">
                                <div class="dropdown float-right">
                                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <div class="dropdown-menu-content">
                                            <a class="dropdown-item" href="farmersprofile.php">Action</a>
                                         
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-0">
                                    <span class="count"><?php 
                                        include ("connection.php");
                                        $sql= "SELECT count(id) as total from farmersprofile";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;
                                        ?>
                                        </span>
                                </h4>
                                <p class="text-light"><b>FARMERS PROFILE</b></p>

                                <div class="chart-wrapper px-0" style="height:70px;" height="70" />
                                <canvas id="widgetChart1"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
                <!--/.col-->

                <div class="col-md-6 col-lg-3">
                    <div class="card text-white bg-flat-color-2">
                        <div class="card-body pb-0">
                            <div class="dropdown float-right">
                                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="dropdown-menu-content">
                                        <a class="dropdown-item" href="customerorder.php">Check Customer Request</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">
                                    <span class="count"><?php 
                                        include ("connection.php");
                                        $sql= "SELECT count(id) as total from orders";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;
                                        ?></span>
                                </h4>
                            <p class="text-light"><b>Customer Orders</b></p>

                            <div class="chart-wrapper px-0" style="height:70px;" height="70" />
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-md-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="productdetails.php">VIEW FARM PRODUCTS</a>
                                <a class="dropdown-item" href="#">PENDING FARM PRODUCTS</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                                    <span class="count"><?php 
                                        include ("connection.php");
                                        $sql= "SELECT count(id) as total from products";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;
                                        ?></span>
                                </h4>
                    <p class="text-light"><b>FARM PRODUCTS</b></p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70" />
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-md-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                        <i class="fa fa-cog"></i>
                                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                            <div class="dropdown-menu-content">
                                <a class="dropdown-item" href="#">Deals of the week</a>
                                   <a class="dropdown-item" href="#">Deals of the month</a>
                             
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-0">
                                    <span class="count">0</span>
                                </h4>
                    <p class="text-light"><b>Uploaded Product</b></p>

                    <div class="chart-wrapper px-3" style="height:70px;" height="70" />
                    <canvas id="widgetChart4"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

 <div class="col-sm-12 mb-4">
        <div class="card-group">
         
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <a href="addnewfarmers.php"><i class="fa fa-user-plus"></i></a>
                    </div>
                    <div class="h4 mb-0">
                        <span class=""><a href="addnewfarmers.php">New Farmer</a></span>
                        </div>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                       <a href="addnewproduct.php"> <i class="fa fa-cart-plus"></i></a>
                    </div>
                    <div class="h4 mb-0">
                        <span class=""><a href="addnewproduct.php">New Product</a></span>
                    </div>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">0</span>%
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">Delivery rate</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="h4 mb-0"><?php echo date("h:i:sa"); ?> </div>
                    <div class="h4 mb-0"><?php echo date("d-m-y"); ?> </div>
                    <small class="text-muted text-uppercase font-weight-bold">Current. Time & Date</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-comments-o"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">0</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="col-md-12">
        <div class="row"> <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><a href="adminregistration.php"><i class="ti-user text-primary border-primary"></i></a></div>
                    <div class="stat-content dib">
                        <div class="stat-text">ADD NEW ADMIN</div>
                        <div class="stat-digit"><?php 
                                        include ("connection.php");
                                        $sql= "SELECT count(mem_id) as total from adminprofile";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;
                                        ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    </div>
      
    <!--/.col-->




    <div class="col-lg-3 col-md-6">
        <div class="social-box facebook">
            <i class="fa fa-facebook"></i>
            <ul>
                <li>
                    <strong><span class="count">40</span> k</strong>
                        <span>friends</span>
                </li>
                <li>
                    <strong><span class="count">450</span></strong>
                        <span>feeds</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->


    <div class="col-lg-3 col-md-6">
        <div class="social-box twitter">
            <i class="fa fa-twitter"></i>
            <ul>
                <li>
                    <strong><span class="count">30</span> k</strong>
                        <span>friends</span>
                </li>
                <li>
                    <strong><span class="count">450</span></strong>
                        <span>tweets</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->


    <div class="col-lg-3 col-md-6">
        <div class="social-box linkedin">
            <i class="fa fa-linkedin"></i>
            <ul>
                <li>
                    <strong><span class="count">40</span> +</strong>
                        <span>contacts</span>
                </li>
                <li>
                    <strong><span class="count">250</span></strong>
                        <span>feeds</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->


    <div class="col-lg-3 col-md-6">
        <div class="social-box google-plus">
            <i class="fa fa-google-plus"></i>
            <ul>
                <li>
                    <strong><span class="count">894</span> k</strong>
                        <span>followers</span>
                </li>
                <li>
                    <strong><span class="count">92</span></strong>
                        <span>circles</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->





    </div><!-- .row -->
    </div><!-- .animated -->
    </div><!-- .content -->




    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/widgets.js"></script>

</body>

</html>
