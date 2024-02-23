<?php

//session_start();



include_once 'db.php';



if (isset($_SESSION['unique_id'])){

    
    $id = mysqli_real_escape_string($con, $_GET['id']);

    $output = "";

    $user_id = $_SESSION['unique_id'];

    $sql = "SELECT * FROM products WHERE product_id = '$id'";

    //(shop_name='$search_word' OR skill = '$search_word' OR services = '$search_word' OR area = '$search_word' OR state = '$search_word' OR city = '$search_word' OR category = '$search_word') 

    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0)

    {

        if($row = mysqli_fetch_assoc($query)){

            $user = $row['user_id'];

            $sql = "SELECT * FROM products WHERE user_id = '$user' AND product_id != '$id' order by rand() limit 8";


            $query = mysqli_query($con, $sql);

            if(mysqli_num_rows($query) > 0)

            {

                while($row = mysqli_fetch_assoc($query)){

                        $output .= '
                        <div class="product">
                        <span class="delete"><a href="#"><i class="fa fa-heart"></i></a><a href="product_view.php?id='. $row['product_id'] .'"><i class="fa fa-cart-shopping"></i></a></span>
                        
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

            <h4 style="width:100%;text-align:center;">No Other Product Found</h4>

            ';

        }

        else {

            echo 'Error!';      

        }echo $output;


    }
        else {

    echo 'Error!';      

    }   
}
else {

    echo 'Error!';      

    }   }
else{

    header('Location: home.php');

    exit();

}

    
?>