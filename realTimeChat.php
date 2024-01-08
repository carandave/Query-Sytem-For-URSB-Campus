<?php 

require 'db_conn.php';

session_start();

$_SESSION['user_id'];
$fromUser = $_POST['fromUser'];
$toUser = $_POST['toUser'];

$output="";

$chats = mysqli_query($conn, "SELECT * FROM conversations WHERE FromUser='$fromUser' AND ToUser='$toUser' OR FromUser='$toUser' AND ToUser='$fromUser'");


while($chat = mysqli_fetch_assoc($chats)){
    if($chat['FromUser'] == $_SESSION['user_id']){
        $output.= "<div style='text-align: right;'>
            <p style='background: #1877F2; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
            ".$chat["Message"]."
            </p>
            <p style='color: gray; display: inline-block;'>
                                        ".$chat["created_date"]."
                                        </p>
           </div>";
    }
    else{
        $output.=  "<div style='text-align: left;'>
            <p style='background: #444950; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
            ".$chat["Message"]."
            </p>
            <p style='color: gray; display: inline-block;'>
                                        ".$chat["created_date"]."
                                        </p>
           </div>";
    }


}

echo $output;





?>