<?php

include('function.php');
user_session();
user_check("");

include('header.php');
?>
<?php
        // if submit button is clicked
        if (isset($_POST['submit'])) {
            $farm_name = $_POST['farm_name'];
            $ceo_name = $_POST['ceo_name'];
            $address = $_POST['address'];
            $phoneno = $_POST['phoneno'];
            $email = $_POST['email'];
            $area_of_specialization = $_POST['area_of_specialization'];
         
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
            $uploaded_image = "images/farmersprofile/".$unique_image;

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
                $query = "INSERT INTO farmersprofile(farm_name, ceo_name, address, phoneno, email, area_of_specialization, image) VALUES('$farm_name', '$ceo_name', '$address', '$phoneno', '$email', '$area_of_specialization', '$uploaded_image')";
                // query the database;
                $result = $db_connect->query($query);
                //mysqli_query($connection,$query);

            }
        }
    ?>
 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ADD NEW FARMER</h1>
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
  <div class="card-header"><b>FARMER REGISTRATION FORM</b></div>
        <div class="card-body card-block">
     <form name="reg" action="" method="post" enctype="multipart/form-data">
        
                 <div class="form-group">
        <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-users"></i></div>
         <input type="text" id="name" required name="farm_name" placeholder="Farm Name" class="form-control" style="text-transform:uppercase">
                     </div></div>
          <div class="form-group">
              <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-user"></i></div>
         <input type="text" required id="name" name="ceo_name" placeholder="Ceo Name" class="form-control" style="text-transform:uppercase">
         </div>
        </div>
         <div class="form-group">
              <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-globe"></i></div>
         <input type="address" id="address" name="address" placeholder="Address" class="form-control">
                 </div>
            </div>
          <div class="form-group">
              <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-phone"></i></div>
         <input type="phone" id="phone number" name="phoneno" placeholder="Phone Number" class="form-control">
                 </div>
            </div>
          <div class="form-group">
              <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
         <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                 </div>
            </div>
                 <div class="form-group">
                 <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-leaf"></i></div>
                     <textarea name="area_of_specialization" id="textarea-input" rows="7" class="form-control" columns="10" placeholder="Area of Specialization"></textarea>
     </div>
                </div>
            <div class="form-group">
                 <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-camera"></i></div>
          <b><i>Upload Farm Logo </i></b>  <input type="file"  id="image" name="image">         
     </div>
                </div>
       
        
          <div class="form-actions form-group"><button name="submit" type="submit" class="btn btn-success btn-sm" onclick="alert('New Farmers Profile Created')">REGISTER</button></div>
         
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