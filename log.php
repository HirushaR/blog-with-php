<?php
session_start();
include "function/db.php";

if (isset($_POST['sign-inbtn'])) {

    $email = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

    $select_user = "SELECT * FROM users WHERE email='".$email."' AND password='$pass'";
    $query= mysqli_query($con, $select_user);
    $check_user = mysqli_num_rows($query);
    if ($check_user)
    {
        #echo "logged in";
        $_SESSION['login_user']= $email;
       header("Location: home.php");
    }
    else
    {
        $select_admin = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password ='$pass'";
        $query1= mysqli_query($con, $select_admin);
        $check_admin = mysqli_num_rows($query1);

        if($check_admin == 1){
            $_SESSION['user_email'] = $email;
            echo "<script>window.open('admin_home.php', '_self')</script>";
        }
        else {
            echo"<script>alert('Your Email or Password is incorrect')</script>";

        }
    }
}