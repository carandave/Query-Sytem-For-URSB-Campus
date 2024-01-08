<?php 

require 'db_conn.php';
session_start();

$_SESSION['admin_id'];

$fromUser = $_POST['fromUser'];
$toUser = $_POST['toUser'];

$output="";

$chats = mysqli_query($conn, "SELECT * FROM conversations WHERE FromUser='$fromUser' AND ToUser='$toUser' OR FromUser='$toUser' AND ToUser='$fromUser'");


while($chat = mysqli_fetch_assoc($chats)){
    if($chat['FromUser'] == $_SESSION['admin_id']){
        $output.= "<div style='text-align: right; background: #1877F2;'>
            <p style='background: #1877F2; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
            ".$chat["Message"]."
            </p>
            <br>
            <p style='color: black; display: inline-block;'>
                                        ".$chat["created_date"]."
                                        </p>
           </div>";
           
    }
    else{
        $output.=  "<div style='text-align: left;'>
            <p style='background: #444950; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
            ".$chat["Message"]."
            </p>
            <br>
            <p style='color: black; display: inline-block;' >
                                        ".$chat["created_date"]."
                                        </p>
           </div>";
    }


}

echo $output;

?>