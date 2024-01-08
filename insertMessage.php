<?php 

require 'db_conn.php';

    $fromUser = $_POST['fromUser'];
    $toUser = $_POST['toUser'];
    $message = $_POST['message'];
    $date = date('Y-m-d');
    date_default_timezone_set('Asia/Manila');
    $time = date('h:i:s');

    $output ="";

    $sql = "INSERT INTO `conversations` (`FromUser`, `ToUser`, `Message`, `created_date`, `time`) VALUES ('$fromUser', '$toUser', '$message', '$date', '$time')";

    if($conn->query($sql) === TRUE){
        $output="";
        
    }
    else{
        $output="Error. Please Try Again.";
    }

    echo $output;







?>