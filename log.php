<?php

session_start();

include_once 'db.php';



if (isset($_POST['gender']) && isset($_POST['cpassword']) && isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['phone'])){

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
 
    }

    $gender = validate($_POST['gender']);

    $password = validate($_POST['password']);

    $cpassword = validate($_POST['cpassword']);

    $fname = validate($_POST['name']);

    $lastname = validate($_POST['lastname']);

    $phone = validate($_POST['phone']);

    $email = '';

    $img_id = 'profile.svg';

    $unique_id = rand(time(), 10000000);

    $area = '';

    $shop_name = '';

    $skill = '';

    $services = '';

    $time_added = date('d F Y');

    $shop_type = "";
    



    if(empty($gender)){

        header("Location: signup.php?error=Gender is required");

        exit();

    }

    else if(empty($fname)){

        header("Location: signup.php?error=First Name is required");

        exit();

    }

    else if(empty($lastname)){

        header("Location: signup.php?error=Last Name is required");

        exit();

    }

    else if(empty($phone)){

        header("Location: signup.php?error=Phone Number is required");

        exit();

    }

    else if(empty($cpassword)){

        header("Location: signup.php?error=Comfirm password is required");

        exit();

    }

    else if(strlen($password)<8){

        header("Location: signup.php?error=Password have to be more than 8 or more digits");

        exit();

    }

    else if(empty($password)){

        header("Location: signup.php?error=Password is required");

        exit(); 

    }

    else if($cpassword != $password){

        header("Location: signup.php?error=Passwords doesn't correlate");

        exit();

    }

    else{

        /*$options = array("cost"=>4);
        $password = password_hash($password,PASSWORD_BCRYPT,$options);*/
        $sqli = "SELECT * FROM user WHERE phone='$phone'";



        $results = mysqli_query($con, $sqli);

        if(mysqli_num_rows($results)===1){

        $row = mysqli_fetch_assoc($results);

        if($row['phone']===$phone){

            header("Location: signup.php?error=Phone number already exist!");

        exit();

        }

    }else{

        $sql = "INSERT INTO user(unique_id, fname, lastname, gender, pass, img_id, user, status, phone,area, shop_name, skill, services, signup_date, shop_type) VALUES ('$unique_id', '$fname', '$lastname', '$gender', '$password', '$img_id', 'Buyer', 'Active Now', '$phone', '$area', '$shop_name', '$skill', '$services', '$time_added', '$shop_type')";



        $result = mysqli_query($con, $sql);



        $sql = "SELECT * FROM user WHERE phone='$phone' AND pass='$password'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)===1){

        $row1 = mysqli_fetch_assoc($result);

                $_SESSION['gender']=$row1['gender'];

                $_SESSION['area']=$row1['area'];

                $_SESSION['shop_name']=$row1['shop_name'];

                $_SESSION['skill']=$row1['skill'];

                $_SESSION['services']=$row1['services'];

                $_SESSION['lastname']=$row1['lastname'];

                $_SESSION['unique_id']=$row1['unique_id'];

                $_SESSION['fname']=$row1['fname'];

                $_SESSION['img_id']=$row1['img_id'];

                $_SESSION['email']=$row1['email'];

                $_SESSION['phone']=$row1['phone'];

                $_SESSION['user']=$row1['user'];

                $_SESSION['location']=$row1['mylocation'];

                $_SESSION['shop_type']=$row1['shop_type'];

                $_SESSION['state']=$row1['state'];

                $_SESSION['city']=$row1['city'];

        if($result){

            header("Location: complete.php");

            exit();
        
        } else {

            header("Location: signup.php?error=Seems you have an Account already!");

        exit();

        }
    }

    }

    }

}else{

    header('Location: log-in.php');

    exit();

}

    





?>