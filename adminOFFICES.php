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
<script src="assets/js/popup.js"></script>
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
<span class="logo-title">OFFICES</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
</ul>
</div>
</div>
</nav>
</header>


<section id="promo" class="promo section offset-header">
<div class="container text-center">
<p class="intro">"Nurturing Tomorrow's Noblest"</p>
<div class="btns">
<a class="btn btn-cta-secondary" href="adminREGISTRAR.php">REGISTRAR OFFICE</a>
<a class="btn btn-cta-secondary" href="adminCLINIC.php">HEALTH OFFICE</a>
<a class="btn btn-cta-secondary" href="adminLIBRARY.php">LIBRARY OFFICE</a>
<a class="btn btn-cta-secondary" onclick="togglePopup()">OSDS OFFICE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
        
<div class="popup" id="popup-1">
<div class="overlay"></div>
<div class="content">
<div class="close-btn" onclick="togglePopup()">&times;
</div>
<br>
<br>
<section id="promo" class="">
<div class="container text-center">
<div class="btns">
<h3>Office of the Student Development Services</h3>
<br>
<a class="btn btn-cta-primary" href="adminADMISSION.php">ADMISSION OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="adminGUIDANCE.php">GUIDANCE OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="adminOJT.php">OJT AND PLACEMENT</a>
<br>
<br>
<a class="btn btn-cta-primary" href="adminSCHOLARSHIP.php">SCHOLARSHIP AND FINANCE ASSISTANCE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
</div>
</div>

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
      
<div class="popup" id="popup-1">
<div class="overlay"></div>
<div class="content">
<div class="close-btn" onclick="togglePopup()">&times;
</div>
<br>
<br>
<section id="promo" class="">
<div class="container text-center">
<div class="btns">
<h3>Office of the Student Development Services</h3>
<br>
<a class="btn btn-cta-primary" href="adminADMISSION.php">ADMISSION OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="adminGUIDANCE.php">GUIDANCE OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="adminOJT.php">OJT AND PLACEMENT</a>
<br>
<br>
<a class="btn btn-cta-primary" href="adminSCHOLARSHIP.php">SCHOLARSHIP AND FINANCE ASSISTANCE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
</div>
</div>

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

