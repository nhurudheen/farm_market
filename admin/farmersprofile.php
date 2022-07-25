<?php

session_start();
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
                            
                            <li class="active">FARMERS PROFILE</li>
                            <li><a href="dashboard.php">Dashboard</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">FARMERS Data Table</strong>
                            </div>
                            <div class="card-body">
                <?php

include("connection.php");
{
$sql=mysqli_query($db_connect,"select * from farmersprofile");
                echo "<table id='bootstrap-data-table-export' class='table table-striped table-bordered'>";
                 echo "<thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>FARM Name</th>
                                            <th>CEO NAME</th>
                                            <th>ADDRESS</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>";
    echo"<tbody>";
     while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['id'];
                        
                        echo"<tr>";
                        echo"<td>".$result['id']. "</td>";
                        echo"<td>".$result['farm_name']. "</td>";
                        echo"<td>".$result['ceo_name']. "</td>";
                        echo"<td>".$result['address']. "</td>";
                        echo"<td>".$result['phoneno']. "</td>";
                        echo"<td>  <a href='editfarmer.php?id=$id'><button type='button' class='btn btn-sm social linkedin' style='margin-bottom: 4px'>
                                    <i class='fa fa-pencil'></i>
                                </button></a>

                               <a href='deletefarmer.php?id=$id'> <button type='button' class='btn btn-sm social flickr' style='margin-bottom: 4px'>
                                    <i class='fa fa-trash-o'></i>
                                </button></a></td>";
                        echo"</tr>";
     }
                        echo"</tbody>";
                        echo"</table>";
}
                                ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


<?php
include('footer.php');