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
                            <button class=\"btn btn-secondary\">visit</button>
                            <button class=\"btn btn-primary\">Edit</button>
                        </td>
                </tr>
     
         ";
         }


     }
 }