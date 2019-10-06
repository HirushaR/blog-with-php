<?php
session_start();
include ("function/db.php");

$post_id = $_POST['post_id'];
$user = $_SESSION['login_user'];
$comment = $_POST['comment'];
$time = time();

$get_user_id ="SELECT id FROM users WHERE email='".$user."'";
$result = mysqli_query($con, $get_user_id);
$row = mysqli_fetch_assoc($result);
$user_id= $row['id'];

$insert_comment = "insert into comment(post_id,user_id,comment,created_at) values('".$post_id."', '".$user_id."','".$comment."','".date("Y-m-d H:i:s",$time)."')";
$query = mysqli_query($con , $insert_comment);
if ($query)
{
    echo "
        <script>
        alert('comment added');
        </script>
    ";
    header("location:post.php?id=$post_id");
}