<?php
session_start();
include("function/functions.php")
?>
<html>
<head>
    <title>post</title>
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
           <?php
            show_single_post();
           $id = $_GET['id'];
           ?>
        </div>
        <hr>
        <div class="commnt" style="margin: 40px;">
            <div id="one">
                <div class="show-comment">
                    <u><i>hirusharandunu11@gmail.com</i></u><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae iure officia praesentium quae quam rerum? Blanditiis, exercitationem hic minus natus placeat quam rem tempora? Fugiat itaque officia omnis quasi!</p>
                </div>
                <div id="tow" style="display: none">
                    <div class="create">
                        <form action="create_comment.php" method="post">
                            <div class="form-group">
                                <input type="text" name="comment" id="comment" class="form-control" placeholder="add a comment">
                                <input type="hidden" name="post_id" id="post_id" value="<?php echo $id ?>">

                            </div>
                        </form>
                    </div>
                </div>

                <a href="javascript:showDiv()"> comment</a>
            </div>
        </div>
    </div>

</div>

</body>
<script>
    function showDiv() {
        div = document.getElementById('tow');
        div.style.display = "block";
    }
</script>


</html>