<?php
include('function.php');
user_session();
user_check("");
include('header.php');
?>

  

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            <li class="active">EDIT PROFILE</li>
                            <li><a href="dashboard.php">FARM MARKET</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
<br><br><br>
        <div class="col-md-12"  style="background-image:url(images/bg.jpg)">
            <div class="row">
              <div class="col-md-2"></div>
    <!--/.col-->
    <div class="col-lg-8 col-md-6">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3"><?php  echo  session_value("username");  ?>  PROFILE CARD</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <?php
					$id=session_value("id");
					$sql="SELECT  *  FROM  adminprofile  where  mem_id='$id'";
					$result=mysqli_query($con,$sql);
					$rows=mysqli_fetch_array($result);
			?>
                    <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                    <h2 class="text-sm-center mt-2 mb-1"><?php  echo  $rows['name'];  ?></h2>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                  <table>
			<tr>
				<td class="td_1"><b>Username :</b></td>
				<td  class="left"><?php  echo  $rows['username'];  ?></td>
			</tr>
			<tr>
				<td class="td_1"><b>Name: </b></td>
				<td  class="left"><?php  echo  $rows['name'];  ?></td>
			</tr>
			<tr>
				<td class="td_1"><b>Email: </b></td>
				<td  class="left"><?php  echo  $rows['email'];  ?></td>
			</tr>
			
			</table>
                </div>
               
            </div>
        </div>
    </div>
                
<div class="col-md-2"></div>

      
    <!--/.col-->









    </div><!-- .row -->
    </div><!-- .animated -->




    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php
include('footer.php');    
?>