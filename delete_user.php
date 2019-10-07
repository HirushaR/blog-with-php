<?php
include ("function/db.php");

$id = $_GET['id'];
$delete = "DELETE FROM users WHERE id = '".$id."'";
$query = mysqli_query($con,$delete);
if($query)
{
    header('location:admin_home.php');
}
else
{
    echo "error";
}