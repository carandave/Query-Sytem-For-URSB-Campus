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

<body data-spy="scroll">

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
<header id="header" class="header">                          
<nav id="main-nav" class="main-nav navbar navbar-expand-md">
<div class="container-fluid">
<div><a href="#"><img src="urslogo6.png"></a></div>
<a class="navbar-brand logo scrollto" href="#promo">
<span class="logo-title">Reports</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
<li class="nav-item sr-only"><a class="nav-link scrollto" href="#promo">Home</a></li>
</ul>
</div>
</div>
</nav>
</header>

<section id="promo" class="promo section offset-header">
<div class="container text-center">
<i><p class="intro">"Nurturing Tomorrow's Noblest"</p></i>
<li class="list-inline-item facebook-like">
</div>
</section>

<section class="promo p-5">

    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-dark">Reports</h3>
            </div>
            <!-- <div class="col-md-6">
                <a href="chatReportPrint.php" class="btn btn-info">Print</a>
            </div> -->
        </div>

        <form action="chatReport_filter.php" method="get">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="font-weight-bold text-dark">From: </label>
                        <input type="date" id="from_date" name="from_date" class="form-control">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="" class="font-weight-bold text-dark">To: </label>
                        <input type="date" name="to_date" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <div>
                            <label for="" class="font-weight-bold">.</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
    <?php 
    
    $sql = "SELECT c.FromUser, c.created_date, u.user_id, u.user_name FROM conversations c INNER JOIN users u ON c.FromUser = u.user_id WHERE c.FromUser < 1001 GROUP BY c.FromUser";
    $result = $conn->query($sql);
    
    ?>
    <div class="card-body">
        <table class="table bg-light">
        <thead class="thead-dark">
            <tr>
            <th >No. of Students</th>
            <th scope="col">Student Full Name</th>
            <th>Chatted Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php if($result->num_rows > 0){?>
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
            <?php } ?> -->
        </tbody>
        </table>
    </div>
    </div>

    
</section>




<section id="contact" class="contact section has-pattern">
<div class="container">
<div class="contact-inner">
<h2 class="title  text-center"></h2>
<p class="intro  text-center"></p>
<div class="author-message">                      
<div class="profile">
<img class="img-fluid" src="" alt="" />
</div>



<p><strong></strong></p>
</div>                   
</div>
<div class="info text-center">
<h4 class="sub-title"></h4>
<ul class="">
<li class="list-inline-item"><a href="https://www.facebook.com/URSBOFFICIAL" target="_blank"><i class=""></i></a></li>
<li class="list-inline-item"><a href="https://www.facebook.com/URSBinOSDS" target="_blank"><i class=""></i></a></li>    
<li class="list-inline-item last"><a href="https://www.facebook.com/ursbussg" target="_blank"><i class=""></i></a></li>              
</ul>
</div>
</div>
</div>
</section>
<footer class="footer">
<div class="container text-center">

<small class="copyright">© 2023 Copyright: University of Rizal System Binangonan.</a></small>
</div>
</footer>
        
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/plugins/prism/prism.js"></script>    
<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
<script src="assets/js/main.js"></script>  

         
</body>
</html> 

