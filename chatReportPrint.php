<?php 

require 'db_conn.php';
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
<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
<link rel="stylesheet" href="assets/css/popup2.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="assets/js/popup.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script> 
</head> 

<body data-spy="scroll" style="height: 100vh;">

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    


<section class="promo p-5" style="height: 100%;">

    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-dark">Reports</h3>
            </div>
            <div class="col-md-6">
                <a href="chatReportPrint.php" class="btn btn-info">Print</a>
            </div>
        </div>
        
    </div>
    <?php 
    
    $sql = "SELECT c.FromUser, c.created_date, u.user_id, u.user_name FROM conversations c INNER JOIN users u ON c.FromUser = u.user_id WHERE c.FromUser < 1001 GROUP BY c.FromUser";
    $result = $conn->query($sql);
    
    ?>
    <div class="card-body" id="">
        <table class="table bg-light">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Student User Name</th>
            <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if($result->num_rows > 0){?>
                <?php while($row = $result->fetch_assoc()){?>
            <tr>
                <td scope="row"><?php echo $row['user_name']; ?></td>
                
                <td scope="row"><?php 
                                // $time = $row['time'];
                                // $time = strtotime($time);
                                echo date("F j Y", strtotime($row['created_date']));
                                // echo date('H:i:s', strtotime($row['time'])); 
                                ?>
                </td>
            </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
        </table>
    </div>
    </div>

    
</section>






        
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/plugins/prism/prism.js"></script>    
<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
<script src="assets/js/main.js"></script>  
         
</body>
</html> 

