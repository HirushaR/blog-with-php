<?php
include "query/db.php";

if (isset($_POST['sign-inbtn'])) {

    $email = htmlentities(mysqli_real_escape_string($con, $_POST['username']));
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

    $select_user = "SELECT * FROM users WHERE email='".$email."' AND password='$pass'";
    $query= mysqli_query($con, $select_user);
    $check_user = mysqli_num_rows($query);
    if ($check_user)
    {
        #echo "logged in";
       echo "<script>window.location.replace(\"home.php\");</script>";
    }
    else
    {
        echo "error";
    }
}