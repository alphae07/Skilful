<?php

session_start();



include_once 'db.php';



if (isset($_POST['phone']) && isset($_POST['password'])){

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

    }

    $phone = validate($_POST['phone']);

    $password = validate($_POST['password']);

    if(empty($phone)){

        header("Location: log-in.php?error=Phone Number is required");

        exit();

    }

    else if(empty($password)){

        header("Location: log-in.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE phone='$phone' AND pass='$password'";



        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)===1){

        $row = mysqli_fetch_assoc($result);

        if($row['phone']===$phone && $row['pass']===$password){

            $status = 'Active Now';

            $sql2 = mysqli_query($con, "UPDATE user SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");



            if($sql2){

                echo 'Logged in!';



                $_SESSION['gender']=$row['gender'];

                $_SESSION['area']=$row['area'];

                $_SESSION['shop_name']=$row['shop_name'];

                $_SESSION['skill']=$row['skill'];

                $_SESSION['services']=$row['services'];

                $_SESSION['lastname']=$row['lastname'];

                $_SESSION['unique_id']=$row['unique_id'];

                $_SESSION['fname']=$row['fname'];

                $_SESSION['img_id']=$row['img_id'];

                $_SESSION['email']=$row['email'];

                $_SESSION['phone']=$row['phone'];

                $_SESSION['user']=$row['user'];

                $_SESSION['location']=$row['mylocation'];

                $_SESSION['shop_type']=$row['shop_type'];

                $_SESSION['state']=$row['state'];

                $_SESSION['city']=$row['city'];



                if($row['user']==='Seller'){

                    header("Location: seller/dashboard.php");

                    exit();

                }else if($row['user']==='Buyer'){

                    header("Location: home.php");

                    exit();

                }else{

                    header('Location: log-in.php');

                    exit();

                }

            

            }



            

    } else {

        header('Location: log-in.php?error=Incorrect Phone Number or Password');

        exit();

    }

}else {

    header('Location: log-in.php?error=Incorrect Phone Number or Password');

    exit();

}

    }

}else{

    header('Location: log-in.php');

    exit();

}

    







?>