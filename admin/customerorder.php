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
                        <h1>FARM MARKET</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            
                            <li class="active">CUSTOMER ORDERS</li>
                            <li><a href="dashboard.php">Dashboard</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 <?php

include("connection.php");
{
$sql=mysqli_query($db_connect,"select * from orders");
        echo "<div class='content mt-3'>
            <div class='animated fadeIn'>
                <div class='row'>

                    <div class='col-md-12'>
                        <div class='card'>
                            <div class='card-header'>
                                <strong class='card-title'>CUSTOMER ORDERS</strong>
                            </div>
                            <div class='card-body'>
               
                <table id='bootstrap-data-table-export' class='table table-striped table-bordered'>
                 <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>DATE</th>
                                            <th>ORDER NUMBER</th>
											<th>PRICE</th>
                                            <th>PRODUCTS</th>
                                            <th>FIRSTNAME</th>
                                            <th>LASTNAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NO</th>
											<th>Pending Confirmation</th>
											<th>Shipped</th>
											<th>Delivered</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>";
    
                        echo"<tbody>";
     while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['order_no'];
                        echo"<tr>";
                        echo"<td>".$result['id']. "</td>";
                        echo"<td>".$result['date']. "</td>";
                        echo"<td>".$result['order_no']. "</td>";
                        echo"<td>".$result['grand_total']. "</td>";
                        echo"<td>".$result['products']. "</td>";
                        echo"<td>".$result['firstname']. "</td>";
                        echo"<td>".$result['lastname']. "</td>";
                        echo"<td>".$result['email']. "</td>";
                        echo"<td>".$result['phoneno']. "</td>";
                        echo"<td>"; 
		 echo"<table>"; 
		 echo"<tr>"; echo"<td>".$result['pending']. "</td>";
                        echo"<td>".$result['pendingdate']. "</td>";echo"</tr>";
		 echo"</table>";
		 echo "</td>";
		     echo"<td>"; 
		 echo"<table>"; 
		 echo"<tr>"; echo"<td>".$result['shipped']. "</td>";
                        echo"<td>".$result['shippeddate']. "</td>";echo"</tr>";
		 echo"</table>";
		 echo "</td>";
		     echo"<td>"; 
		 echo"<table>"; 
		 echo"<tr>"; echo"<td>".$result['deliverystatus']. "</td>";
                        echo"<td>".$result['deliverydate']. "</td>";echo"</tr>";
		 echo"</table>";
		 echo "</td>";
                        
		 
                        echo"<td>  <a href='updateorder.php?order_no=$id'><button type='button' class='btn btn-sm social linkedin' style='margin-bottom: 4px'>
                                    <i class='fa fa-pencil'></i>
                                </button></a>

                               <a href='orderdelete.php?order_no=$id'> <button type='button' class='btn btn-sm social flickr' style='margin-bottom: 4px'>
                                    <i class='fa fa-trash-o'></i>
                                </button></a></td>";
                        echo"</tr>";
     }
                        echo"</tbody>";
                        echo"</table>";
}
                            
                           echo "</div>";
                         echo "</div>";
                     echo "</div>";


                echo "</div>";
             echo "</div>"; 
         echo "</div>";
?><!-- .content -->


<?php
include('footer.php');