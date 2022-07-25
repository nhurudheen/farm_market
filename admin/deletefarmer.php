<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
include("connection.php");
 $id=$_GET['id'];

$sql=mysqli_query($db_connect,"delete from farmersprofile where id='$id'");
header('location:farmersprofile.php');
?>