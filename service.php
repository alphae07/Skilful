<?php

if(isset($_SESSION['unique_id'])) 

{

    include_once "db.php";



    $user_id =  $_SESSION['unique_id'];

    $output = "";

    $service = mysqli_real_escape_string($con, $_GET['service']);



    $sql = "SELECT * FROM user Where unique_id != '$user_id' AND services = '$service' order by rand() limit 8";



    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0)

    {

        while($row = mysqli_fetch_assoc($query)){

                $output .= '

                <a href="seller_view.php?seller_id='. $row['unique_id'] .'"><div class="wrap">
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

                <h4 style="width:100%;text-align:center;color:#353535;margin:2vh 0;">No Skill available</h4>

                ';

            }

            else {

                echo 'Error!';

            

            }echo $output;

        

        

}else{

    header("home.php");

}



?>