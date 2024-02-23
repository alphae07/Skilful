<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once 'db.php';
        $logout_id = mysqli_real_escape_string($con, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = 'Offline Now';
            $sql = mysqli_query($con, "UPDATE user SET status = '{$status}' WHERE unique_id = {$logout_id}");
                if($sql){
                    session_unset();
                    session_destroy();

                    header('Location: index.html');
                }
        } else{
            header('Location: home.php');
        }
    }else{    
        header('Location: index.html');
    }
?>