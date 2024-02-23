<?php
    session_start();
    include 'db.php';

if (isset($_POST['country']) && isset($_POST['state']) && isset($_POST['area']) && isset($_POST['pass']) && isset($_POST['email'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data); 
        $data = htmlspecialchars($data);
        return $data;
    }
    $phone = $_SESSION['phone'];
    $pass = validate($_POST['pass']);
    $email = validate($_POST['email']);
    $area = validate($_POST['area']);
    $city = validate($_POST['state']);
    $state = validate($_POST['country']);
    $location = $area.', '.$city.', '.$state;


    if(empty($email)){
        header("Location: complete.php?error=Email is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: complete.php?error=Password is required");
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
            
            $sqll = "UPDATE user SET img_id='$new_img_name', city='$city', state='$state', mylocation='$location' , area='$area', email='$email' WHERE unique_id= {$row['unique_id']}";
            if($con -> query($sqll) === TRUE){
                header('Location: home.php');
                exit();
            }else {
                header('Location: complete.php?error=Unable to update record');
                exit();
            }
                    
    } else {
        header('Location: complete.php?error=Incorrect Phone Number or Password');
        exit();
    }
}else {
    header('Location: complete.php?error=Incorrect Phone Number or Password');
    exit();
}
    }

    else{

        header("Location: complete.php?error=Please upload a valid image");

        exit();

}

}

else{

    header("Location: complete.php?error=Please Upload your Image");

    exit();

}
        }
}

}else{
    header('Location: complete.php?error=Error!');
    exit();
}

    
?>