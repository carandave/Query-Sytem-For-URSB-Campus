<?php 

require 'db_conn.php';

session_start();

$userId =  $_SESSION['user_id'];
$userName =  $_SESSION['user_name'];

if(!isset($_SESSION['user_id'])){
    header("Location: studentindex.php");
}

// if(isset($_GET['adminId'])){
//     $_SESSION['userId'] =  $_SESSION['user_id'];
//     $_SESSION['adminId'] = $_GET['adminId'];
//     header("Location: chatbox.php");
// }







// echo $userId;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Based Query System URSB</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">    
<link rel="shortcut icon" href="urslogo2.png"> 
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
<script defer src="assets/fontawesome/js/all.min.js"></script>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/prism/prism.css"> 
<link rel="stylesheet" href="assets/css/popup2.css">
<script src="assets/js/popup.js"></script>
<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
<script async defer src="https://buttons.github.io/buttons.js"></script> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head> 

<body class="d-flex justify-content-center align-items-center vh-100"style="background: #17baef">

    <div class="modal-dialog" style="width: 500px;">
        <div class="modal-content">
             <div class="modal-header">
                <h4>
                    <?php 
                    
                        if(isset($_GET['toId']))
                        {
                            $userName = mysqli_query($conn, "SELECT * FROM admins WHERE admin_id='".$_GET['toId']."' ");
                            $uName = mysqli_fetch_assoc($userName);

                            echo '<input type="text" value='.$_GET['toId'].' id="toUser" class="d-none"/>';
                            echo 'To: '.$uName['email'].' ';
                        }
                        else{
                            header("Location: home.php");
                        }
                    
                    ?>

                    <input type="text" value="<?php echo $userId?>" id="fromUser" class="d-none">
                    <span class="d-none">From</span>
                </h4>
             </div>

             <div class="modal-body" id="msgBody" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
                <?php {
                    if(isset($_GET['toId']))
                        {
                            $chats = mysqli_query($conn, "SELECT * FROM conversations WHERE (FromUser='$userId' AND ToUser='".$_GET['toId']."') OR (FromUser='".$_GET['toId']."' AND ToUser='$userId')");
                            // $uName = mysqli_fetch_assoc($userName);
                            // $chat = mysqli_fetch_assoc($chats);
                            
                            while($chat = mysqli_fetch_assoc($chats)){
                                if($chat['FromUser'] == $_SESSION['user_id']){
                                echo "<div style='text-align: right;'>
                                        <p style='background: #1877F2; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
                                        ".$chat["Message"]."
                                        </p>
                                        <p style='color: gray; display: inline-block;'>
                                        ".$chat["created_date"]."
                                        </p>
                                       </div>";
                                }
                                else{
                                    echo "<div style='text-align: left;'>
                                        <p style='background: #444950; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
                                        ".$chat["Message"]."
                                        </p>
                                        <p style='color: gray; display: inline-block;'>
                                        ".$chat["created_date"]."
                                        </p>
                                       </div>";
                                }
                            }
                        }
                } ?>
             </div>

             <div class="modal-footer d-flex">
             <textarea name="message" id="message" class="form-control" style="height: 70px;" ></textarea>
             <a class="btn btn-primary mt-2" href="home.php">Back</a>
             <button id="send" class="btn btn-primary mt-2" style="height: 70%;">Send</button>
                <!-- <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-12" style="width: 100%;">
                        <textarea name="message" id="message" style="height: 70px; width: 100%;" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <button id="send" class="btn btn-primary" style="height: 70%;">Send</button>
                    </div>
                </div> -->
                
                
             </div>
        </div>
    </div>
         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            $("#send").on("click", function(){
                console.log("Click t");

                $.ajax({
                    
                    url: "insertMessage.php",
                    method: "POST",
                    data: {
                        fromUser: $("#fromUser").val(),
                        toUser: $("#toUser").val(),
                        message: $("#message").val(),
                        action: "insertMessageStudent"
                    },
                    dataType: "text",
                    success: function(data){
                        $("#message").val("");
                        
                        console.log("Click b");
                    }
                })
            });

            setInterval(function(){
                $.ajax({
                    url: "realTimeChat.php",
                    method: "POST",
                    data: {
                        fromUser: $("#fromUser").val(),
                        toUser: $("#toUser").val(),
                        
                    },
                    dataType: "text",
                    success: function(data){
                        $("#msgBody").html(data);
                    }
                })
            }, 2000)

            


        });

    </script>
</body>
</html> 



