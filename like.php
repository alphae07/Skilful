<?php

    session_start();

    include_once "db.php";
    
    $id =  mysqli_real_escape_string($con, $_GET['id']);

    $user_id =  $_SESSION['unique_id'];
        
        $sql = "UPDATE posts set likes = likes + 1 where post_id = '$id' limit 1";
        
         $result = mysqli_query($con, $sql);

            if($result){

                echo 'Liked!';

                header("Location: shops.php?error=Post Liked!");

                exit();

            } else {

                header("Location: shops.php?error=Unable to like post!");

            exit();

            }
        
    
    
    
?>