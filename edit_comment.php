<?php
session_start();
include ("function/db.php");

$body = $_POST['edit-comment'];
$id = $_POST['comment_id'];
$post_id = $_POST['post_id'];

$update = "update comment set comment='".$body."' where id='".$id."'";
$query = mysqli_query($con, $update);
if ($query)
{
    header("location:post.php?id=$post_id");
}

