<?php

//session_start();



include_once 'db.php';



if (isset($_SESSION['unique_id'])){

    
    $search_word = mysqli_real_escape_string($con, $_GET['search_word']);

    $output = "";

    $user_id = $_SESSION['unique_id'];

    $sql = "SELECT * FROM products WHERE user_id != '$user_id' AND (product_name LIKE '%$search_word%' OR product_desc LIKE '%$search_word%') order by rand() limit 12";

    //(shop_name='$search_word' OR skill = '$search_word' OR services = '$search_word' OR area = '$search_word' OR state = '$search_word' OR city = '$search_word' OR category = '$search_word') 

    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0)

    {

        while($row = mysqli_fetch_assoc($query)){

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
            }

        }else if(mysqli_num_rows($query) == 0){

            $output .= '

            <h4 style="width:100%;text-align:center;">Found No Product</h4>

            ';

        }

        else {

            echo 'Error!';      

        }echo $output;


}else{

    header('Location: home.php');

    exit();

}

    
?>