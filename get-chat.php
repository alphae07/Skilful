<?php

    session_start();

    if(isset($_SESSION['unique_id'])){

        include_once "db.php";

        $outgoing_id = mysqli_real_escape_string($con, $_POST['outgoing_id']);
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);

        $output = "";

        $sql = "SELECT * FROM messages LEFT JOIN user 
        ON user.unique_id = messages.incoming_msg_id WHERE (outgoing_msg_id = '$outgoing_id' 
        AND (incoming_msg_id = '$incoming_id') OR (outgoing_msg_id = '$incoming_id') AND incoming_msg_id = '$outgoing_id') 
        ORDER BY msg_id";

                $query = mysqli_query($con, $sql);

                if(mysqli_num_rows($query) > 0){

                    while($row = mysqli_fetch_assoc($query)){

                        if($row['outgoing_msg_id'] === $outgoing_id){

                            $output .= '
                                <div class="newmsg">
                                <div class="outgoing" style="white-space: pre-line;">
                                    '. $row['msg'] .'<span class="msg-time1">'. $row['msg_time'] .'</span>
                                </div>
                            </div>                            
                            ';

                        }else{

                            $output .= '
                            <div class="newmsg">
                                <div class="incoming" style="white-space: pre-line;">
                                    '. $row['msg'] .'<span class="msg-time2">'. $row['msg_time'] .'</span>
                                </div>
                            </div>
                            ';

                        }

                    }

                    echo $output;

                }

    }else{

        header("log-in.php");

    }

?>