<?php

session_start();

include_once 'db.php';



if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['msg'])){

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
 
    }

    $name = validate($_POST['name']);

    $email = validate($_POST['email']);

    $subject = validate($_POST['subject']);

    $msg = validate($_POST['msg']);

    $time_sent = date('h:i A, d F Y');



    if(empty($name)){

        header("Location: contact.php?error=Your Name is required");

        exit();

    }

    else if(empty($email)){

        header("Location: contact.php?error=Your Email is required");

        exit();

    }

    else if(empty($msg)){

        header("Location: contact.php?error=Message is required");

        exit();

    }
    else{

        $sql = "INSERT INTO sent_contact (sender_name, sender_email, msg_subject, message, sent_time) VALUES ('$name', '$email', '$subject', '$msg', '$time_sent')";



        $result = mysqli_query($con, $sql);

        if($result){

            echo 'Message Sent!';

            //header('Location: log-in.php');

            header("Location: contact.php?success=Message Delivered!");

            exit();

        } else {

            header("Location: contact.php?error=Error!");

        exit();

        }

    }


}else{

    header('Location: home.php');

    exit();

}

    





?>