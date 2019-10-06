<?php
session_start();
include "function/db.php";

 $title = $_POST['title'];
 $content = $_POST['summernote'];
 $user = $_SESSION['login_user'];
$time = time();

 $get_user_id ="SELECT id FROM users WHERE email='".$user."'";
 $result = mysqli_query($con, $get_user_id);
 $row = mysqli_fetch_assoc($result);
 $id= $row['id'];

$select_user = "insert into posts(user_id,title,content,created_at) values('".$id."','".$title."','".$content."','".date("Y-m-d H:i:s",$time)."')";
$query= mysqli_query($con, $select_user);
 if ($query)
 {
     echo "
            <script type=\"text/javascript\">
            alert('inserted');
            </script>
        ";
     header("location:home");

 }
 else
 {
     echo "error";
 }
