<?php
include  "function.php";
user_session();
include ('header.php');
?>

<!-- /header -->
         <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ADD NEW ADMIN</h1>
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
  <div class="card-header"><b>ADMIN REGISTRATION FORM</b></div>
        <div class="card-body card-block">
     <form name="reg" action="adminconfirm.php" method="post">
        <p style="color:red; text-transform:uppercase"> <b>	<?php  
				$remarks  =  isset($_GET['remarks'])  ?  $_GET['remarks']  :  '';
				if  ($remarks==null  and  $remarks=="")
				{
					echo "New Admin! Register Here";
				}
				if  ($remarks=='success')
				{
					echo "Registration  Successful";
				}
				if  ($remarks=='failed')
				{
					echo  "Registration  Failed!,  Admin Already exists";
				}if  ($remarks=='password_mismatch')
				{
					echo "Both Password must be same";
				}if  ($remarks=='field_empty')
				{
					echo "Fill all the Fields.";
				}if  ($remarks=='invalid_email')
				{
					echo  "Invalid Email Address";
				}if  ($remarks=='error')
				{
					echo '<script>window.onload=tabtoggle("t2");</script>';
					echo  '<span class="tp-regtext lightred">Registration failed<br>Error: '.$_GET['remarks'].'</span>';
				}
				?></b></p>
                 <div class="form-group">
        <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-users"></i></div>
         <input type="text" id="name" required name="name" placeholder="Fullname" class="form-control" style="text-transform:uppercase">
                     </div></div>
          <div class="form-group">
              <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-user"></i></div>
         <input type="text" required id="username" name="username" placeholder="Username" class="form-control" style="text-transform:uppercase">
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
         <div class="input-group-addon"><i class="fa fa-lock"></i></div>
       <input type="password" required id="password" name="password" placeholder="Password" class="form-control">
     </div>
                </div>
            <div class="form-group">
                 <div class="input-group">
         <div class="input-group-addon"><i class="fa fa-lock"></i></div>
       <input type="password" required id="password" name="passwordrepeat" placeholder="Retype Password" class="form-control">
     </div>
                </div>
       
        
          <div class="form-actions form-group"><button name="submit" type="submit" class="btn btn-success btn-sm">REGISTER</button></div>
         
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