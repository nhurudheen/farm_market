<?php
include "function.php";
session_start();
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=md5($_POST['password']);
$result  =  mysqli_query($con,"SELECT  *  FROM  adminprofile where username='$username' and password='$password'");
$c_rows  =  mysqli_num_rows($result);

if  ($c_rows<1)  {
header("location:  index.php?remark_login=failed");
}
if($username=="" || $password==""){
header("location:  index.php?remark_login=field_empty");
}
$sql="SELECT  *  FROM  adminprofile  WHERE  username='$username'  and  password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count==1)
{
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != ""){
$y=$row['mem_id'];
$_SESSION['user_id']=$row['mem_id'];
}else{
$_SESSION['user_id']=$row['mem_id'];
}
if(isset($_SESSION['username']) && $_SESSION['username'] != ""){
$x=$row['username'];
$_SESSION['username']=$row['username'];
	}
else{
	$_SESSION['username']=$row['username'];
}
if(isset($_SESSION['login_user']) && $_SESSION['login_user'] != ""){
	$x=substr(str_shuffle('abcdefrtopics23456789'),0,3);
	$_SESSION['login_user']=$x;
}else{
	$x=substr(str_shuffle('abcdefrtopics23456789'),0,3);
	$_SESSION['login_user']=$x;
}
if(isset($_SESSION['time']) && $_SESSION['time'] != ""){}else{
	$_SESSION['time']=time();
}
header("location:  ./dashboard.php?remark_login=login_success");
}
}else{	
header("location:  ./index.php?remark_login=access_denied");
}
?>