<?php
/**
 * Created by PhpStorm.
 * User: Danuja Fernando
 * Date: 10/7/2019
 * Time: 10:25 AM
 */
include "function/db.php";

$psw = $_POST['passwordsignup'];
$id = $_POST['id'];

$update = "update users set password='".$psw."' where id='".$id."'";
$query = mysqli_query($con, $update);
if($query)
{
    header("location:index.html");
}
else
{
    echo "error";
}