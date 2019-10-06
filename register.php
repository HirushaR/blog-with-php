<?php
/**
 * Created by PhpStorm.
 * User: Danuja Fernando
 * Date: 9/30/2019
 * Time: 2:29 PM
 */
include "function/db.php";

if (isset($_POST['register-btn'])) {

    $name = htmlentities(mysqli_real_escape_string($con, $_POST['usernamesignup']));
    $email = htmlentities(mysqli_real_escape_string($con, $_POST['emailsignup']));
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['passwordsignup']));
    $time = time();

    $select_user = "insert into users(name,email,password,created_at,admin_id) values('".$name."','".$email."','".$pass."','".date("Y-m-d",$time)."',1)";
    $query= mysqli_query($con, $select_user);
    if ($query)
    {
        echo "<script>window.location.replace(\"home.php\");</script>";
    }
    else{
        echo "error";
    }
}