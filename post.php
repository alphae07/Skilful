<?php

//session_start();









if(isset($_SESSION['unique_id'])) 

{

    include_once "db.php";



    $user_id =  $_SESSION['unique_id'];

    $output = "";





    $sql = "SELECT * FROM posts WHERE (user_id != {$user_id}) ORDER BY rand() Limit 5";



    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0)

    {

        while($row = mysqli_fetch_assoc($query)){
            $pro = $row['user_id'];

            $sql1 = "SELECT * FROM user WHERE (unique_id = {$pro})";



            $query1 = mysqli_query($con, $sql1);

            if(mysqli_num_rows($query1) > 0)

            {

                if($row1 = mysqli_fetch_assoc($query1)){

                    $post_id = $row['post_id'];
                    $color = '';
                    $color1 = '';
                    
                    $quer = mysqli_query($con,"SELECT * from post_likes WHERE post_id='".$post_id."' and user_id='".$user_id."'");
                    $num = mysqli_num_rows($quer);
                    
                    if($num>0)
                    {
                        $liker = mysqli_fetch_array($quer);
                    if($liker['post_like'] == 1){
                        $color = 'lik';
                    }
                    else{
                        $color = 'neutral';
                    }
                    
                    if($liker['post_unlike'] == 1){
                        $color1 = 'unlik';
                    }
                    else{
                        $color1 = 'neutral';
                    }
                }


                    
                    $que = mysqli_query($con, "SELECT SUM(post_like) as post_like, SUM(post_unlike) as post_unlike from post_likes where post_id='$post_id'");
                    $rowCount = mysqli_fetch_array($que);

                    if($rowCount['post_unlike'] > 0){
                        $rowCount['post_unlike'] = $rowCount['post_unlike'];
                    }
                    if($rowCount['post_like'] > 0){
                        $rowCount['post_like'] = $rowCount['post_like'];
                    }
                    if($rowCount['post_like'] == ""){
                        $rowCount['post_like'] = 0;
                    }
                    if($rowCount['post_unlike'] == ""){
                        $rowCount['post_unlike'] = 0;
                    }
                    
                    
                


                $output .= '<div class="post">     
                <div class="post-head">
                    <img src="seller/image/'. $row1['shop_pic'] .'">
                    <a href="seller_view.php?seller_id='. $row1['unique_id'] .'" class="post-info">
                        <div class="shop-name">'. $row1['shop_name'] .'</div>
                       <div class="shop-locate">'. $row1['services'] .' | '. $row1['mylocation'] .'
                    </div>
                    <span class="date">'. $row['pdate'] .'</span>
                    </a>
                    <div class="option">
                        <a href="#"><i class="fa fa-ellipsis-v"></i></a>
                    </div>
                </div>
                
                <div class="post-body">
                <span style="white-space: pre-line;">'. $row['post'] .'</span>
                    <img src="seller/posts/'. $row['pimage'] .'">
                </div>
                <div class="post-footer">
                    <a href="post_like.php?post_id='. $row['post_id'] .' & op=like"><span class=""><i class="fa fa-thumbs-up num '.$color.'"></i>&nbsp;'.$rowCount['post_like'].'</span></a>
                                                   <a href="new-msg.php?user_id='. $row1['unique_id'] .'&purchase= "><span class="msg-post"><i class="fa fa-envelope"></i></span></a>
                     <a href="post_like.php?post_id='. $row['post_id'] .' & op=unlike"><span class=""><i class="fa fa-thumbs-down num '.$color1.'"></i>&nbsp;'.$rowCount['post_unlike'].'</span></a>
                    
                </div>                   
            </div>
                                 ';


        }

    }



        }

        

    }else{



    }echo $output;

}else{

    header("shops.php");

}





/*

<div class="card-body" style="background-image: url();">

</div>



delete.php?id='.$row['post_id'].'

*/





?>







