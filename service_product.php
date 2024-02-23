<?php

//session_start();









if(isset($_SESSION['unique_id'])) 

{

    include_once "db.php";



    $user_id =  $_SESSION['unique_id'];

    $output = "";

    $service = mysqli_real_escape_string($con, $_GET['service']);




   

            $sql1 = "SELECT * FROM user WHERE unique_id != '$user_id' AND services = '$service' order by rand() LIMIT 8";



            $query1 = mysqli_query($con, $sql1);

            if(mysqli_num_rows($query1) > 0)

            {

                if($row1 = mysqli_fetch_assoc($query1)){

                    $sql = "SELECT * FROM products WHERE user_id != '$user_id' ORDER BY rand() LIMIT 12";



                    $query = mysqli_query($con, $sql);
                
                    if(mysqli_num_rows($query) > 0)
                
                    {
                
                        while($row = mysqli_fetch_assoc($query)){

            if($row['user_id'] !== $user_id){

                $output .= '

                <div class="product">
                <span class="delete"><a href="#"><i class="fa fa-heart"></i></a><a href="#"><i class="fa fa-cart-shopping"></i></a></span>
                
                <div class="product-body">
                    <img src="seller/products/'. $row['product_img'] .'">
                </div>
                <a href="#" class="product-footer">
                    <p>'. $row['product_name'] .'</p>
                    <span>NGN'. $row['product_price'] .'</span>
                </a>
            </div>
                
                ';

            }else {

                return false;

            }

        }

    }



        }

        

    }/*else {

        $output .= "

            <h6 style='width:100%;text-align:center;'>You don't have any product yet!</h6>

        ";

    }*/echo $output;

}else{

    header("home.php");

}





/*

<div class="card-body" style="background-image: url();">

</div>

*/





?>







