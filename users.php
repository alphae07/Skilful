<?php

    include_once "db.php";

    $outgoing_id = $_SESSION['unique_id'];
    $seller = 'Seller';

    $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id in (select outgoing_msg_id from messages) AND user = '$seller' AND NOT unique_id = {$outgoing_id}");

    $output = '';

    if(mysqli_num_rows($sql) == 1){

        $output .= 'No Available Chat Yet';

    }elseif(mysqli_num_rows($sql) > 0){

        while($row = mysqli_fetch_assoc($sql)){

            $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}

                        OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}

                        OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

            $query2 = mysqli_query($con, $sql2);

            $row2 = mysqli_fetch_assoc($query2);

            if(mysqli_num_rows($query2) > 0){

                $result = $row2['msg'];

            }else {

                $result = 'No message available';

            }

      

            (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;

            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";



            ($row['status'] == "Offline Now") ? $offline = "offline" : $offline = "online";



            $output .= '<a href="new-msg.php?user_id='.$row['unique_id'].'&purchase= " class="msg">
                        <img src="seller/image/'. $row['shop_pic']. '">
                        <div class="sender">
                            <div class="some">
                                <p>'. $row['shop_name'] .'</p>
                                <i class="fa-solid fa-circle status '.$offline.'"></i>
                                
                            </div>
                            <div>
                                <span>'. $you . $msg .'</span><span>'. $row2['msg_time'] . '</span>
                            </div>
                        </div>
                    </a>';

        }

    }

    echo $output;

?>