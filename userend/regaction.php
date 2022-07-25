<?php
    require 'connection.php';
    session_start();
    $firstname= mysqli_real_escape_string($con,$_POST['firstname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Kindly enter a corrrect email";
        ?>
        <meta http-equiv="refresh" content="2;url=registration.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=registration.php" />
        <?php
    }
    $address=$_POST['address'];
    $phoneno=mysqli_real_escape_string($con,$_POST['phoneno']);
    $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
    $duplicate_user_query="select id from user_profile where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exist for another user, Kindly use another email!");
        </script>
        <meta http-equiv="refresh" content="1;url=registration.php" />
        <?php
    }else{
        $user_registration_query="insert into user_profile(firstname,email,password,address,phoneno,lastname) values ('$firstname','$email','$password','$address','$phoneno','$lastname')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "Customer successfully registered, You can Now Log In with your Email and password, Enjoy Shopping";
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=login.php" />
        <?php
    }
    
?>