<?php
session_start();
include ("function/db.php");

$title = $_POST['title'];
$body = $_POST['summernote'];
$post_id = $_POST['post_id'];

$update = "update posts set content='".$body."',title='".$title."' where id='".$post_id."'";
$query = mysqli_query($con, $update);
if ($query)
{
    header("location:post.php?id=$post_id");
}
else
{
    echo "error";
}

