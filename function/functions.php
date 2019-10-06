<?php
 include ("db.php");

 function get_post()
 {
     global $con;
     $get = "select * from posts";
     $query = mysqli_query($con, $get);
     $result =  mysqli_num_rows($query);
     if ($result) {
         while($row = mysqli_fetch_array($query))
         {
            $id = $row['id'];
             $title = $row['title'];
             $content = $row['content'];
             $user = $row['user_id'];
             $create = $row['created_at'];

             $get_user_id ="SELECT email FROM users WHERE id='".$user."'";
             $result = mysqli_query($con, $get_user_id);
             $row = mysqli_fetch_assoc($result);
             $email= $row['email'];


             echo "
                <tr>
                        <td>$title</td>
                        <td>$email</td>
                        <td>$create</td>
                        <td>
                            <a href='post.php?id=$id'><button class=\"btn btn-secondary\">show</button></a>
                            <button class=\"btn btn-primary\">Edit</button>
                        </td>
                </tr>
                
        
         ";

         }

     }
 }




function show_single_post()
{
    if (isset($_GET['id'])) {
        global $con;
        $id = $_GET['id'];
        $show = "select * from posts where id= '".$id."'";
        $query_1 = mysqli_query($con, $show);
        $row = mysqli_fetch_assoc($query_1);
        $title= $row['title'];
        $content = $row['content'];
        $user = $row['user_id'];
        $create = $row['created_at'];

        echo "
                <b><h3> $title</h3> </b> <br>
                <i>$create</i><br>
                <hr>
                <p>$content </p>         
        ";

    }

}

function show_comment($id)
{
    global $con;
    $post_id = $id;
    $auth_email = $_SESSION['login_user'];
    $get_comment = "select * from comment where post_id='".$post_id."'";
    $query = mysqli_query($con, $get_comment);
    $result =  mysqli_num_rows($query);
    if ($result) {
        while ($row = mysqli_fetch_array($query)) {
            $cmt_id = $row['id'];
            $comment = $row['comment'];
            $user_id = $row['user_id'];
            $get_user_id ="SELECT email FROM users WHERE id='".$user_id."'";
            $result = mysqli_query($con, $get_user_id);
            $row = mysqli_fetch_assoc($result);
            $email= $row['email'];


            if ($auth_email == $email)
            {
                echo "
                <u> <i><h6>$email</h6> </i></u>
                <p id='comment'>$comment</p>
                <div id='edit' style='display: none'>
                        <form action='edit_comment.php' method='post'>
                               <input type='text' id='edit-comment' name='edit-comment' placeholder='$comment'>
                               <input type='hidden' name='comment_id' value='$cmt_id'>
                               <input type='hidden' name='post_id' value='$post_id'>
                        </form>
                </div>
                <a href='javascript:editComment()'>edit</a>     
                <script >
                    function editComment() {
                      document.getElementById(\"comment\").style.display=\"none\";
                      document.getElementById(\"edit\").style.display=\"block\";
                    }
                </script>                 
            ";

            }
            else
            {
                echo "
                <u> <i><h6>$email</h6></i></u>
                <p>$comment</p>   
            ";
            }

        }
    }
}