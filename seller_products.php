<?php

//session_start();









if(isset($_SESSION['unique_id']) ) 

{

    include_once "db.php";


    $seller_id = mysqli_real_escape_string($con, $_GET['seller_id']);

    $output = "";





    $sql = "SELECT * FROM products WHERE (user_id = {$seller_id}) ORDER BY id DESC LIMIT 8";



    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0)

    {

        while($row = mysqli_fetch_assoc($query)){

            $sql1 = "SELECT * FROM user WHERE (unique_id = {$seller_id}) ORDER BY id DESC LIMIT 5";

 

            $query1 = mysqli_query($con, $sql1);

            if(mysqli_num_rows($query1) > 0)

            {

                while($row1 = mysqli_fetch_assoc($query1)){

                    

            if($row['user_id'] === $seller_id){

                $output .= '

                   <div class="product">
                                
                                    <span class="delete"><a href="#"><i class="fa fa-heart"></i></a><a href="product_view.php?id='. $row['product_id'] .'"><i class="fa fa-cart-shopping"></i></a></span>
                                    <img src="seller/products/'. $row
                                    ['product_img'] .'">
                                    <div>
                                        <p>'. $row['product_name'] .'</p>
                                        <span>NGN'. $row['product_price'] .'</span>
                                    </div>
                                    <p class="pan">'. $row['product_desc'] .'</p>
                                </div>
               
                ';

            }else {

                return false;

            }

        }

    }



        }

        

    }else {

        $output .= "

            <h6 style='width:100%;text-align:center;font-size:small; margin:1vh 0;'>No Available Product!</h6>

        ";

    }echo $output;

}else{

    header("seller_view.php");

}





/*

<div class="card-body" style="background-image: url();">

</div>

*/





?>







