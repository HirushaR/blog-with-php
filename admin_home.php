<?php
session_start();
include("function/functions.php")
?>
<html>
<head>
    <title>Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
<?php
include "navbar.php";

?>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-8">
        <div class="container">
            <div class="header">
                <h3>User List</h3>
                <br>
            </div>
            <div class="table">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th><i class='fas fa-user-tie'></i> name</th>
                        <th><i class="far fa-calendar-alt"></i> email</th>
                        <th><i class="fas fa-cogs"></i> join date</th>
                        <th><i class="fas fa-cogs"></i> action</th>
                    </tr>
                    <?php
                    get_user();
                    ?>
                </table>
            </div>
        </div>

        <div class="container">
            <div class="header">
                <h3>POST LIST</h3>
                <br>
            </div>
            <div class="table">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th><i class='fas fa-user-tie'></i> Author</th>
                        <th><i class="far fa-calendar-alt"></i> Publish At</th>
                        <th><i class="fas fa-cogs"></i> Action</th>
                    </tr>
                    <?php
                    get_post();
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    document.getElementById("create-btn").onclick = function () {
        location.href = "create_post.php";
    };
</script>
</html>