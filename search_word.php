<?php

//session_start();



include_once 'db.php';



if (isset($_SESSION['unique_id'])){

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $search_word = mysqli_real_escape_string($con, $_GET['search_word']);

    $output = "";

    $user_id = $_SESSION['unique_id'];

    $sql = "SELECT * FROM user WHERE user = 'Seller' AND unique_id != '$user_id' AND (shop_name LIKE '%$search_word%' OR skill LIKE '%$search_word%' OR services LIKE '%$search_word%' OR area LIKE '%$search_word%' OR state LIKE '%$search_word%' OR city LIKE '%$search_word%' OR category LIKE '%$search_word%') order by rand() limit 12";

    //(shop_name='$search_word' OR skill = '$search_word' OR services = '$search_word' OR area = '$search_word' OR state = '$search_word' OR city = '$search_word' OR category = '$search_word') 

    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0)

    {

        while($row = mysqli_fetch_assoc($query)){

                $output .= '
                <a href="seller_view.php?seller_id='. $row['unique_id'] .'"><div class="wrap" style="background-color:whitesmoke;">
                <img src="seller/image/'. $row['shop_pic'] .'">
                <div class="pro">
                    <div class="pro1">
                        
                        <span>'. $row['shop_name'] .'</span>
                    </div>
                    <div class="pro2">
                        '. $row['services'] .'
                    </div>
                    <div class="pro3">
                        <span>'. $row['mylocation'] .'</span>
                        <span class="part">Pro Seller</span>
                    </div>
                    
                </div>
            </div></a>
                ';
            }

        }else if(mysqli_num_rows($query) == 0){

            $output .= '

            <h4 style="width:100%;text-align:center;">Found No Seller</h4>

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