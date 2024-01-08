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
    <link rel="stylesheet" href="assets/css/popup.css">
    <script src="assets/js/popup.js"></script>
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script> 
    <style>
        @media only screen and (max-width: 765px) {
  
     .popup-index .content{
           width:100%;
         /*height:300px;*/
     }
   
}
    </style>
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
<h5><span class="logo-title">URSB CAMPUS</span>
</a></h5>
            
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
<li class="nav-item sr-only"><a class="nav-link scrollto" href="#promo">Home</a></li>
<li class="nav-item"><a class="nav-link" href="studentADMISSIONguests.php">ADMISSION OFFICE</a></li>
<li class="nav-item"><a class="nav-link" href="studentlogin.php">LOGIN</a></li>
<li class="nav-item"><a class="nav-link" href="studentregister.php">SIGN UP</a></li>
<li class="nav-item"><a class="nav-link scrollto" href="#about">ABOUT US</a></li>
</ul>
</div>
</div>
</nav>
</header>
    
<section id="promo" class="promo section offset-header">
<div class="container text-center">
<p class="intro">Click the button below to log in or sign up.</p>
<div class="btns">
<a class="btn btn-cta-primary" href="studentlogin.php">CONTINUE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
</section>
    
<section id="about" class="about section">
    <div class="container">
        <h2 class="title text-center">What is the use of this Web Based Query System for the University of Rizal System Binangonan Campus?</h2>
        <p class="intro text-center">This system will allow students to easily ask their questions and concerns to campus offices. On the other side, the offices on campus can reach students and give answers to their questions by using this system.</p>
        <div class="row">
            <?php 
            
            $sql = "SELECT * FROM tbl_university";
            $result = $conn->query($sql);
            
            ?>

            <?php if($result->num_rows > 0){?>
                <?php while($rows = $result->fetch_assoc()){?>
            <div class="item col-lg-4 col-md-6 col-12">
                <div class="icon-holder">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title"><?php echo $rows['title'];?></h3>
                    <p><?php echo $rows['content'];?></p>
                    <!-- <h3 class="sub-title">URS Vision</h3>
                    <p>The leading University in human resource development, knowledge and technology generation and environmental stewardship.</p> -->
                </div>
            </div>
                <?php } ?>
            <?php } ?>
        </div>            
    </div>
</section>

<div id="botmanWidgetRoot">
<div style="position: fixed; bottom: 0px; right: 0px; z-index: 2147483647; box-sizing: content-box; overflow: hidden; min-width: 400px; min-height: 120px;">
<div style="position: relative; cursor: pointer;">
<div class="desktop-closed-message-avatar" style="background: #17baef; display: flex; justify-content: center; position: absolute; top: 38px; right: 20px; height: 60px; width: 60px; border: 0px; border-radius: 50%; box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 20px;">
<img src="assets/images/iconbot.png" onclick="togglePopup()" style="width: 100%; height: auto; border-radius: 999px;">
</div>
</div>
<div style="display: none; height: 450px;">
<iframe id="chatBotManFrame" src="/botman/chat?conf=%7B%22chatServer%22%3A%22%2Fbotman%22%2C%22frameEndpoint%22%3A%22%2Fbotman%2Fchat%22%2C%22timeFormat%22%3A%22HH%3AMM%22%2C%22dateTimeFormat%22%3A%22m%2Fd%2Fyy%20HH%3AMM%22%2C%22title%22%3A%22BotMan%20Widget%22%2C%22cookieValidInDays%22%3A1%2C%22introMessage%22%3A%22Hi!%3Cbr%3EWelcome%20to%20the%20BotMan%20documentation!%20%F0%9F%99%82%3Cbr%3EMost%20of%20the%20code%20samples%20and%20snippets%20throughout%20the%20documentation%20work%20in%20this%20widget%20-%20feel%20free%20to%20give%20it%20a%20try!%22%2C%22placeholderText%22%3A%22Send%20a%20message...%22%2C%22displayMessageTime%22%3Atrue%2C%22mainColor%22%3A%22%23408591%22%2C%22bubbleBackground%22%3A%22%23408591%22%2C%22bubbleAvatarUrl%22%3A%22https%3A%2F%2Fbotman.io%2Fimg%2Flogo.png%22%2C%22desktopHeight%22%3A450%2C%22desktopWidth%22%3A370%2C%22mobileHeight%22%3A%22100%25%22%2C%22mobileWidth%22%3A%22300px%22%2C%22videoHeight%22%3A160%2C%22aboutLink%22%3A%22https%3A%2F%2Fbotman.io%22%2C%22aboutText%22%3A%22Powered%20by%20BotMan%22%2C%22chatId%22%3A%22%22%2C%22userId%22%3A%22%22%2C%22wrapperHeight%22%3A450%7D" width="100%" height="100%" frameborder="0" allowtransparency="true" style="background-color: transparent;"></iframe>
</div>
</div>
</div>

<div class="popup popup-index" id="popup-1">
<div class="overlay"></div>
<div class="content">
<div class="close-btn" onclick="togglePopup()">&times;
</div>
<br>
<br>
<br>
<h2>Direct submit your queries to Admission Office?</h2>
<br>
<p>Note: You can click the live chat button with the admin if ChatBot can't answer your queries or questions. Thank You</p>
<br>
<a class="btn btn-cta-primary" href="chat_admission.php">CLICK HERE</a>
</div>
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