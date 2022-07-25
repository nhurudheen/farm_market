<?php

include('function.php');
user_session();
user_check("");
include ('header.php');
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
                            
                            <li class="active">PRODUCTS</li>
                            <li><a href="dashboard.php">Dashboard</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>
 <?php

include("connection.php");
{
$sql=mysqli_query($db_connect,"select * from products");
        echo "<div class='content mt-3'>
            <div class='animated fadeIn'>
                <div class='row'>

                    <div class='col-md-12'>
                        <div class='card'>
                            <div class='card-header'>
                                <strong class='card-title'>PRODUCTS Data Table</strong>
                            </div>
                            <div class='card-body'>
               
                <table id='bootstrap-data-table-export' class='table table-striped table-bordered'>
                 <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>PRODUCT Code</th>
                                            <th>PRODUCT Category</th>
                                            <th>PRODUCT Name</th>
                                            <th>FARM Name</th>
                                            <th>PRICE</th>
                                            <th>SIZE</th>
                                            <th>QUANTITY</th>
                                            <th>TYPES</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>";
    
                        echo"<tbody>";
     while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['product_code'];
                        echo"<tr>";
                        echo"<td>".$result['id']. "</td>";
                        echo"<td>".$result['product_code']. "</td>";echo"<td>".$result['product_category']. "</td>";
                        echo"<td>".$result['product_name']. "</td>";
                        echo"<td>".$result['farm_name']. "</td>";
                        echo"<td>".$result['price']. "</td>";
                        echo"<td>".$result['size']. "</td>";
                        echo"<td>".$result['quantity']. "</td>";
                        echo"<td>".$result['category']. "</td>";
                        echo"<td>  <a href='editproduct.php?product_code=$id'><button type='button' class='btn btn-sm social linkedin' style='margin-bottom: 4px'>
                                    <i class='fa fa-pencil'></i>
                                </button></a>

                               <a href='productdelete.php?product_code=$id'> <button type='button' class='btn btn-sm social flickr' style='margin-bottom: 4px'>
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