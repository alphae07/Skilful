<?php
    session_start();
    include 'db.php';

if (isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['state']) && isset($_POST['area']) && isset($_POST['pass']) && isset($_POST['fname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['tel'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }
    $gender = validate($_POST['gender']);
    $pass = validate($_POST['pass']);
    $fname = validate($_POST['fname']);
    $lastname = validate($_POST['lastname']);
    $phone = validate($_POST['tel']);
    $email = validate($_POST['email']);
    $area = validate($_POST['area']);
    $city = validate($_POST['state']);
    $state = validate($_POST['country']);
    $location = $area.', '.$city.', '.$state;


    if(empty($phone)){
        header("Location: buyer_profile.php?error=Phone Number is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: buyer_profile.php?error=Password is required");
        exit();
    
    }else{

        if(isset($_FILES['pic'])){

            $img_name = $_FILES['pic']['name'];

            //$img_type = $_FILES['mypic']['type'];

            $tmp_name = $_FILES['pic']['tmp_name'];



            //Uploading image

            $img_explode = explode('.', $img_name);

            $img_ext = end($img_explode);



            $extensions = ['png', 'jpeg', 'jpg'];

            if(in_array($img_ext, $extensions)===true){

                $time = time();

                

                $new_img_name = $time.$img_name;

                if(move_uploaded_file($tmp_name, "seller/image/".$new_img_name)){

        $sql = "SELECT * FROM user WHERE phone='$phone' AND pass='$pass'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['phone']===$phone && $row['pass']===$pass){
            
            $sqll = "UPDATE user SET gender='$gender',img_id='$new_img_name', city='$city', fname='$fname',state='$state', lastname='$lastname', mylocation='$location' , area='$area', email='$email' WHERE unique_id= {$row['unique_id']}";
            if($con -> query($sqll) === TRUE){
                header('Location: home.php');
                exit();
            }else {
                header('Location: buyer_profile.php?error=Unable to update record');
                exit();
            }
                    
    } else {
        header('Location: buyer_profile.php?error=Incorrect Phone Number or Password');
        exit();
    }
}else {
    header('Location: buyer_profile.php?error=Incorrect Phone Number or Password');
    exit();
}
    }

    else{

        header("Location: buyer_profile.php?error=Please upload a valid image");

        exit();

}

}

else{

    $sql = "SELECT * FROM user WHERE phone='$phone' AND pass='$pass'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['phone']===$phone && $row['pass']===$pass){
            
            $sqll = "UPDATE user SET gender='$gender', city='$city', fname='$fname',state='$state', lastname='$lastname', mylocation='$location' , area='$area', email='$email' WHERE unique_id= {$row['unique_id']}";
            if($con -> query($sqll) === TRUE){
                header('Location: home.php');
                exit();
            }else {
                header('Location: buyer_profile.php?error=Unable to update record');
                exit();
            }
                    
    } else {
        header('Location: buyer_profile.php?error=Incorrect Phone Number or Password');
        exit();
    }
}else {
    header('Location: buyer_profile.php?error=Incorrect Phone Number or Password');
    exit();
}

}
        }
}

}else{
    header('Location: buyer_profile.php?error=Error!');
    exit();
}

    
?>