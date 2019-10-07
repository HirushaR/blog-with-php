<?php
include ("function/db.php");

$emal = $_POST['email'];
$get_psw ="select * from users where email='".$emal."'";
$query = mysqli_query($con, $get_psw);
$row = mysqli_fetch_assoc($query);
$id= $row['id'];
if ($id)
{
    $url = 'change_psw.php?id='.$id;
    #header('location:change_psw.php');
    header('Location:'.$url);
}
else{
    echo "email is wrong please enter valid email";
}

