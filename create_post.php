<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
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
    <div class="col-sm-8">
        <form method="post">
            <div class="panel-heading">
                <h4>Create post</h4>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <textarea name="summernote" id="summernote" cols="30" rows="10" class="form-control"> </textarea>
            </div>
            <div class="form-group">
                <input type="text" name="members" id="title" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="send" id="send" value="Publish" class="btn btn-primary">
                <input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">

            </div>
        </form>
    </div>
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
