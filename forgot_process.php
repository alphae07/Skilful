<?php
require_once('db.php');
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $query = "SELECT * FROM user WHERE email='$email'";
    $res = mysqli_query($con, $query);
    $count = mysqli_num_rows($res);
    if($count == 1){
        $findresult = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
        if($res = mysqli_fetch_array($findresult)){
            $oldftemail = $res['email'];
        }
        $token = bin2hex(random_bytes(50));
        $inresult = mysqli_query($con, "Insert into pass_reset values('', '$oldftemail', '$token')");
        if ($inresult)
        {
            $FromName = "Skilful Online";
            $FromEmail = "no_reply@skilfulonline.com";
            $ReplyTo = "skilfulonline2023@gmail.com";
            $credits = "All rights are reserved | Skilful Online";
            $headers = "MIME-Version: 1.0\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                $headers .= "From: ".$FromName." <".$FromEmail.">\n";
                    $headers .= "Reply-To: ".$ReplyTo."\n";
                    $headers .= "X-Sender: <".$FromEmail.">\n";
                        $headers .= "X-Mailer: PHP\n";
                        $headers .= "X-Priority: 1\n";
                        $headers .= "Return-Path: <".$FromEmail.">\n";
                            $subject = "You have recieved password reset email";
                $msg = "Your password reset link <br> http://localhost:8081/php/form/password-reset.php?".$token." <br> Reset your password with this link. Click or open in new tab<br><br> <br> <br> <center>".$credits."</center>";
                if(@mail($oldftemail, $subject, $msg, $headers, '-f'.$FromEmail) ){
                    header("location:forgot_password.php?sent=1");
                    $hide='1';
                } else {
                    header("location:forgot_password.php?servererr=1");
                }
        }else {
            header("location:forgot_password.php?something_wrong=1");
        }
    } else {
        header("location:forgot_password.php?err=".$email);
    }
}
?>