<?php
include('header.php');
?>

<br><br>
              <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">PRODUCT ADDED SUCCESSFUL</strong>
                                </div>
                                <div class="card-body">
                                   

                                    <div class="alert alert-danger" role="alert">
 <?php
extract($_POST);
include("connection.php");
$rs=mysqli_query($db_connect,"select * from products where product_code='$product_code'");
if (mysqli_num_rows($rs)>0)
{
	echo " <h4 class='alert-heading'>FAILURE!</h4>
                                        <p>Hell No, Product cannot be added as Product Code already exist</p>
                                        <hr>
                                         <div class='alert alert-primary' role='alert>
                                             <p class='mb-0'>Kindly click <a href='addnewproduct.php' class='alert-link'>ADD </a> to generate another product code</p>
                                    </div>";
	exit;
}
if (isset($_POST['submit'])) {
            $farm_name = $_POST['farm_name'];
            $product_code = $_POST['product_code'];
            $product_name = $_POST['product_name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
	$formerprice = $_POST['formerprice'];
            $size = $_POST['size'];
            $quantity = $_POST['quantity'];
            $expiry_date = $_POST['expiry_date'];
            $receive_date = $_POST['receive_date'];
            $product_category = $_POST['product_category'];
            $description = $_POST['description'];
            // get file uploaded
          

            // file format to be allowed
            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));

            // give the file a unique name/id
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;

            // create this folder " listing-images in your directory, this is where the uploaded image will be stored.
            $uploaded_image = "images/product/".$unique_image;

            // if file size is more than 2MB
            if ($file_size > 2048567) {
                echo "<div class='alert alert-danger'>Image Size should not be more than 2MB, Property not Upload !!!!!</div>";
            
            } 
            // if the file uploaded is not of the allowed format above
            elseif (in_array($file_ext, $permited) === false) {
                echo "<div class='alert alert-danger'>You can upload only:-".implode(', ',$permited)."</div>";
            
            } else {
                // this is responsible for moving the image into the listing-images folder
                move_uploaded_file($file_temp, $uploaded_image);

                // connect to database
               include "connection.php";

                // sql statment to insert the details
                $query = "INSERT INTO products(farm_name, product_code, product_name, category, price, formerprice, size, quantity, expiry_date, receive_date, product_category, description, image) VALUES('$farm_name', '$product_code', '$product_name', '$category', '$price', '$formerprice', '$size', '$quantity', '$expiry_date', '$receive_date', '$product_category', '$description', '$uploaded_image')";
                // query the database;
                
                $result = $db_connect->query($query);
                //mysqli_query($connection,$query);

            }
        }
                                        
echo " <h4 class='alert-heading'>SUCCESS!</h4>
                                        <p>Awn Yeah, Product is succesfully added</p>
                                        <hr>
                                         <div class='alert alert-primary' role='alert>
                                             <p class='mb-0'>Kindly click <a href='addnewproduct.php' class='alert-link'>ADD </a> to add another products.</p>
                                    </div>

                                       
                                    </div>
                                </div>
                            </div>

</div>
                      <div class='col-md-7'>      <div class='col-md-12'>
                        <section class='card'>
                            <div class='twt-feed bg-dark'>
                                <div class='corner-ribon blue-ribon'>
                                    <i class='fa fa-plus'></i>
                                </div>
                                <div class='fa fa-spinner wtt-mark'></div>

                                <div class='media'>
                                    <a href='#'>
                                        <img class='align-self-center rounded-circle mr-4' style='width:150px; height:150px;' alt='' src='$uploaded_image'>
                                    </a>
                                    <div class='media-body'>
                                        <h2 class='text-white display-6'><b>$product_name</b></h2>
                                        <p class='text-light' style='text-transform:inherit'>$farm_name</p>
                                    </div>
                                </div>



                            </div>
                            <div class='weather-category twt-category'>
                                <ul>
                                    <li class='active'>
                                        <h5><b>$price</b></h5>
                                       <b><em>PRICE</em></b>
                                    </li>
                                    <li>
                                        <h5>$size</h5>
                                       <b><em>SIZE</em></b>
                                    </li>
                                    <li>
                                        <h5>$quantity</h5>
                                        <b><em>QUANTITY</em></b>
                                    </li>
                                </ul>
                            </div>
                            <ul class='list-group list-group-flush'>
                                    <li class='list-group-item' style='text-transform:uppercase'>
                                        <i class='fa fa-user' >&nbsp;&nbsp;   </i>$farm_name<span class='badge badge-primary pull-right' >FARM NAMe</span>
                                    </li>
                                 <li class='list-group-item' >
                                        <i class='fa fa-sort-numeric-asc' >&nbsp;&nbsp;   </i> $product_code<span class='badge badge-danger pull-right' >PRODUCT CODE</span>
                                    </li>
                                 <li class='list-group-item' style='text-transform:uppercase'>
                                        <i class='fa fa-lightbulb-o' >&nbsp;&nbsp;   </i> $product_name<span class='badge badge-success pull-right' >product name</span>
                                    </li>
                                 <li class='list-group-item' style='text-transform:uppercase'>
                                        <i class='fa fa-bars' >&nbsp;&nbsp;   </i>$category<span class='badge badge-warning pull-right' >category</span>
                                    </li>
                            </ul>";
     ?>
                            
                        </section>
                    </div>
</div>
                      <div class="col-md-1"></div>
                  </div>
</div>

<?php
include('footer.php');
?>