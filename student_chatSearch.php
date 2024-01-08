<?php 

require 'db_conn.php';
require 'last_chat.php';

session_start();

// $userId =  $_SESSION['user_id'];
// $userName =  $_SESSION['user_name'];

// if(!isset($_SESSION['user_id'])){
//     header("Location: studentindex.php");
// }

// if(isset($_GET['adminId'])){
//     $_SESSION['userId'] =  $_SESSION['user_id'];
//     $_SESSION['adminId'] = $_GET['adminId'];
//     header("Location: chatbox.php");
// }

$adminId = $_GET['adminId'];









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

    <div class="p-2 rounded-shadow bg-light" style="width: 600px; margin-top: 100px">
        <div class="p-3" style="border: 1px solid lightgray">
            <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-light" >
                <div class="d-flex align-items-center ">
                    <?php 
                    
                    $sql = "SELECT * FROM admins WHERE admin_id ='$adminId'";
                    $result = $conn->query($sql);
                    
                    
                    ?>

                    <?php if($result->num_rows > 0) {?>
                        <?php while($row = $result->fetch_assoc()){ ?>
                        
                            <h3 class="m-2 fs-6" ><?php echo $row['office_name'];?></h3>
                            
                        
                    <?php } ?>
                    <?php } ?>
                </div>

                <a href="logout.php" class="btn btn-dark btn-sm ">Log Out</a>
            </div>

            <div class="input-group mb-3">
                <!-- <form action="student_chatSearch.php" method="get" style="width: 100%;"class="d-flex justify-content-center align-items-center">
                    <input type="text" name="search" id="search" class="form-control mb-0" placeholder="Search Last Name..." required>
                    <button type="submit" name="btnSearch" class="btn btn-info mb-0 ml-2">Search</button>
                </form> -->
                <!-- <input type="text" placeholder="Search" name="" class="form-control">
                <button class="btn btn-primary">.</button> -->
            </div>

            

            <ul class="list-group mvh-50 overflow-auto"> 

                <?php 

                    $search = $_GET['search'];
                        
                    $sql2 = "SELECT * FROM users WHERE l_name LIKE '%$search%'";
                    $result2 = $conn->query($sql2);
                ?>

                <?php if($result2->num_rows > 0) {?>
                    <?php while($row2 = $result2->fetch_assoc()){ ?>
                        <li class="list-group-item">
                            <a href="adminchatbox.php?toId=<?php echo $row2['user_id'];?>" class="d-flex ">
                                <div class="d-flex flex-column">
                                    <?php echo $row2['f_name'];?> <?php echo $row2['l_name'];?>
                                    <small>
                                        <?php 
                                        
                                            // echo lastChat($_SESSION['admin_id'], $row2['user_id'], $conn);

                                            $chats = mysqli_query($conn, "SELECT * FROM conversations WHERE (FromUser='$adminId' AND ToUser='".$row2['user_id']."') OR (FromUser='".$row2['user_id']."' AND ToUser='$adminId') ORDER BY id DESC LIMIT 1");

                                            while($chat = mysqli_fetch_assoc($chats)){
                                                if($chat['FromUser'] == $_SESSION['admin_id']){
                                                echo "<div style='text-align: left;'>
                                                        <small style='background: #1877F2; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
                                                        ".$chat["Message"]."
                                                        </small>
                                                        <br>
                                                       </div>";
                                                }
                                                else{
                                                    echo "<div style='text-align: left;'>
                                                        <small style='background: #444950; color: white; word-wrap: break-word; display: inline-block; padding: 10px; border-radius: 10px; max-width: 100px;'>
                                                        ".$chat["Message"]."
                                                        </small>
                                                        <br>
                                                       </div>";
                                                }
                
                
                                            }
                                        ?>

                                        
                                    </small>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
            
        </div>
    </div>
         
</body>
</html> 

