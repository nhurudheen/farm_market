<?php
session_start();
include('function.php');

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$passwordrepeat=md5($_POST['passwordrepeat']);
$result  =  mysqli_query($con,"SELECT  *  FROM  adminprofile  WHERE  username='$username'");
$num_rows  =  mysqli_num_rows($result); 
if($name=="" ||$email=="" ||$username=="" ||$password=="" ||$passwordrepeat=="" ){
	header("location:  adminregistration.php?remarks=field_empty");
}elseif($password!=$passwordrepeat)  {
	header("location:  adminregistration.php?remarks=password_mismatch");
}elseif($num_rows){
	header("location:  adminregistration.php?remarks=failed");
}elseif(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) { 
	header("location:  adminregistration.php?remarks=invalid_email");
}else{
	if(mysqli_query($con,"INSERT  INTO  adminprofile(name,  email,username,  password)VALUES('$name',  '$email','$username',  '$password')")){
		header("location:  adminregistration.php?remarks=success");
	}else{
		$e=mysqli_error($con);
		header("location:  adminregistration.php?remarks=error&value=$e");		
	}
}
?>