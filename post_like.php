<?php
session_start();

include_once "db.php";

    $user_id =  $_SESSION['unique_id'];
    $post_id = mysqli_real_escape_string($con, $_GET['post_id']);  // product id
    $op = mysqli_real_escape_string($con, $_GET['op']);  // like or unlike op
    

    if($op == "like")
    {
        $gofor = "like";
    }
    elseif($op == "unlike")
    {
        $gofor = "unlike";
    }
    else
    {
        exit;
    }
    // check if alredy liked or not query
    $query = mysqli_query($con,"SELECT * from post_likes WHERE post_id='".$post_id."' and user_id='".$user_id."'");
    $num_rows = mysqli_num_rows($query);

    if($num_rows>0) // check if alredy liked or not condition
    {
        $likeORunlike = mysqli_fetch_array($query);
    
        if($likeORunlike['post_like'] == 1)  // if alredy liked set unlike for alredy liked product
        {
            $result = mysqli_query($con,"UPDATE `post_likes` set `post_unlike`=1,`post_like`=0 where post_id='".$likeORunlike['post_id']."' AND user_id='".$user_id."'");
            if($result){
            echo 'Unliked!';

                header("Location: shops.php?error=You already unlike Post!");
                exit();
            }else{
                echo 'Error!';
        
               header("Location: shops.php?error=Error!");
               exit();
               }
        }
        elseif($likeORunlike['post_unlike'] == 1) // if alredy unliked set like for alredy unliked product
        {
            $result = mysqli_query($con,"UPDATE `post_likes` set `post_like`=1,`post_unlike`=0 where post_id='".$likeORunlike['post_id']."' AND user_id='".$user_id."'");
            if($result){
            echo 'Liked!';

                header("Location: shops.php?error=You already like Post!");
                exit();
            }else{
                echo 'Error!!';
        
               header("Location: shops.php?error=Error!!");
               exit();
               }
        }
    }
    else  // New Like
    {
       $result = mysqli_query($con,"INSERT INTO post_likes (post_id, user_id, post_".$gofor.") VALUES ('$post_id','$user_id','1')");
       if($result){
       echo 'React!';

       header("Location: shops.php?error=You $gofor Post!");
       exit();
       }else{
        echo 'Error!!!';

       header("Location: shops.php?error=Error!!!");
       exit();
       }
    }
    
?>