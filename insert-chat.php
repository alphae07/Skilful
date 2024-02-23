<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "db.php";
        $outgoing_id = mysqli_real_escape_string($con, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $msg = mysqli_real_escape_string($con, $_POST['msg']);
        $msg_time = date('h:i A');
        $msg_date = date('d-m-Y');
 
        if(!empty($msg)){
            $sql = mysqli_query($con, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, msg_time, msg_date)
                                VALUES({$incoming_id}, {$outgoing_id}, '{$msg}', '{$msg_time}', '{$msg_date}')") or die();
        }
    }else{
        header("log-in.php");
    }
?>