<?php
session_start();
include("function/functions.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
</head>
<body>
<?php
include "navbar.php";
?>
<div class="container">
    <div class="col-sm-2"></div>
        <?php
           $id = $_GET['id'];
            edit_post($id);
        ?>
    <div class="col-sm-2"></div>
</div>


<script>
    $('#summernote').summernote({
        placeholder: 'Hello bootstrap ',
        tabsize: 2,
        height: 100
    }),
        $('#clear').on('click',function () {
            $('#summernote').summernote('code',null)
        })
</script>
</body>
</html>
