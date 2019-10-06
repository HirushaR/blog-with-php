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
                            <button class=\"btn btn-secondary\" id='visit-btn'>visit</button>
                            <button class=\"btn btn-primary\">Edit</button>
                        </td>
                </tr>
                
            <script type=\"text/javascript\">
                document.getElementById(\"visit-btn\").onclick = function () {
                    location.href = \"post.php?id=$id\";
    };
</script>
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
                <b> <h3> $title</h3> </b> <br>
                <i>$create</i><br>
                <hr>
                <p>$content </p>         
        ";

    }

}