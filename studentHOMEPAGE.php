<?php 

require 'db_conn.php';

session_start();

$userId =  $_SESSION['user_id'];

if(!isset($_SESSION['user_id'])){
    header("Location: studentindex.php");
}

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
<span class="logo-title">Home</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
<li class="nav-item sr-only"><a class="nav-link scrollto" href="#promo">Home</a></li>
<li class="nav-item last"><a class="nav-link " href="home.php">LIVE CHAT</a></li>
<li class="nav-item last"><a class="nav-link " href="chat_registrar.php">CHAT BOT</a></li>
<li class="nav-item last"><a class="nav-link scrollto" href="#contact">CONTACTS</a></li>
<li class="nav-item last"><a class="nav-link " href="studentSETTINGS.php">SETTINGS</a></li>
<li class="nav-item last"><a class="nav-link " href="logout.php">LOGOUT</a></li>        
</ul>
</div>
</div>
</nav>
</header>

<section id="promo" class="promo section offset-header">
<div class="container text-center">
<i><p class="intro">"Nurturing Tomorrow's Noblest"</p></i>
<div class="btns">
<a class="btn btn-cta-primary" href="#docs">List of Offices</a>
<a class="btn btn-cta-primary" href="studentORGCHARTS.php">Organizational Charts</a>
<a class="btn btn-cta-primary" href="studentCHARTERS.php">Citizen Charter</a>
<a class="btn btn-cta-primary" href="studentANNOUNCEMENTS.php">Announcements</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="docs" class="docs section">
    <div class="container">
        <div class="docs-inner">           
        <div class="block">
            <h2 class="title text-center">List of Campus Offices</h2>
            <?php 
                $result = $conn->query("SELECT * FROM tbl_offices");   
            ?>

            <?php while($data = $result->fetch_assoc()){ ?>
                    <div class="block mb-3 mt-1">
                        <div class="mt-5">

                        <h3 class="sub-title text-center mt-3"><?php echo $data['title'];?></h3>
                        <p><?php echo $data['description'];?></p>
                        <p><strong>Functions: </strong><?php echo $data['functions'];?></p>
                        <ul class="list-unstyled">
                            <li><strong>Head: </strong><?php echo $data['head'];?></li><br>
                            <li><strong>Location: </strong><?php echo $data['location'];?></li>
                        </ul>
                        <div class="code-block mb-3">
                            <img class="img-fluid" src="<?php echo $data['image_dir']?> " style="border-radius: 20px;">
                        </div>

                        </div>
                        
                    </div>

                <?php } ?>

        </div>
        </div>    
    </div>
</section>

<section id="contact" class="contact section has-pattern">
<div class="container">
<div class="contact-inner">
<h2 class="title  text-center">Contact Information</h2>
<p class="intro  text-center">I hope you can find Web-Based Query System for University of Rizal System useful for all of your queries and concerns.<br />Feel free to get in touch with the Project Team if you have any questions or suggestions.</p>
<div class="author-message">                      
<div class="profile">
<img class="img-fluid" src="assets/images/ursbbg.jpg" alt="" />
</div>
<div class="speech-bubble">
<h3 class="sub-title">Send Us your Feedbacks.</h3>
<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeoL9c00mU2mTtdiGbaP-A9H5t1f_QgWrIDCM_hTWa_kQ3qnw/viewform?usp=share_link" target="_blank">CLICK HERE.</a></p>
<p><strong>[WEB-BASED QUERY SYSTEM FOR URSB CAMPUS]:</strong>Help Students to submit their concerns and queries in different Campus Offices.</p>
</div>                   
</div>
<div class="info text-center">
<h4 class="sub-title">Get Connected</h4>
<ul class="social-icons list-inline">
<li class="list-inline-item"><a href="https://www.facebook.com/URSBOFFICIAL" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<li class="list-inline-item"><a href="https://www.facebook.com/URSBinOSDS" target="_blank"><i class="fab fa-medium-m"></i></a></li>    
<li class="list-inline-item last"><a href="https://www.facebook.com/ursbussg" target="_blank"><i class="fas fa-envelope"></i></a></li>              
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

