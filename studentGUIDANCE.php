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
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/animation.css">
<link rel="stylesheet" href="assets/css/styleorgchart.css">
<link rel="stylesheet" href="assets/css/stylesettings.css">
<link rel="stylesheet" href="assets/css/popup2.css">
<script src="assets/js/popup.js"></script>
<script defer src="assets/js/orgchart.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script> 
</head> 

<style>
    .card{
        
        box-shadow: 3px 4px 21px -10px rgba(0,0,0,0.71);
-webkit-box-shadow: 3px 4px 21px -10px rgba(0,0,0,0.71);
-moz-box-shadow: 3px 4px 21px -10px rgba(0,0,0,0.71);
        transition: 0.4s ease;
    }

    .card:hover{
        transform: translateY(-15px);
    }
</style>

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
<span class="logo-title">GUIDANCE OFFICE</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
<li class="nav-item sr-only"><a class="nav-link scrollto" href="#promo">Home</a></li>
<li class="nav-item"><a class="nav-link scrollto" href="#features">HIGHLIGHTS</a></li>
<li class="nav-item"><a class="nav-link" href="chat_guidance.php">CHATBOT</a></li>
<li class="nav-item"><a class="nav-link" href="chatbox.php?toId=1004">LIVE CHAT</a></li>
<li class="nav-item"><a class="nav-link scrollto" href="#license">SETTINGS</a></li>                        
<li class="nav-item last"><a class="nav-link scrollto" href="#contact">CONTACT INFORMATION</a></li>
</ul>
</div>
</div>
</nav>
</header>

<section id="promo" class="promo section offset-header">
<div class="container text-center">
<p class="intro">"Nurturing Tomorrow's Noblest"</p>
<div class="btns">
<a class="btn btn-cta-secondary" href="studentREGISTRAR.php">REGISTRAR OFFICE</a>
<a class="btn btn-cta-secondary" href="studentCLINIC.php">HEALTH OFFICE</a>
<a class="btn btn-cta-secondary" href="studentLIBRARY.php">LIBRARY</a>
<a class="btn btn-cta-primary" onclick="togglePopup()">OSDS OFFICE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
    
<section id="about" class="about section">
<div class="container">
<a href="studentHOMEPAGE.php" class="btn">Back to HomePage</a>
<h2 class="title text-center">"Organizational Chart"</h2>
<?php 
    
        $result = $conn->query("SELECT * FROM orgchart WHERE department='Guidance'");
        // $result = $conn->query($sql);

        
    
    ?>

        <div class="row d-flex justify-content-center">
        
            
                <?php while($data = $result->fetch_assoc()){ ?>
                    <div class="col-md-4 d-flex">

                        <div class="card d-flex flex-column justify-content-center align-items-center mt-3 pt-3" style="height: 300px; width: 100%; ">
                        <img class="card-img-top sub-title" src="<?php echo $data['image_dir']?> " alt="Card image cap" style="height: 60%; width: 50%; border-radius: 50%; border: 8px solid gray;">
                        <div class="card-body" >
                            <h5 class="card-title text-center"> <i class="fa-solid fa-crosshairs"></i>  <?php echo $data['member_name'];?></h5>
                            <p class="card-text text-center"><?php echo $data['member_position']?></p>
                        </div>
                        </div>

                    </div>

                <?php } ?>    
</div>
    
<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"About Us"</h2>
<div class="row">
<div class="item col-lg-4 col-md-6 col-12">
<div class="icon-holder">
<i class="fa-solid fa-crosshairs"></i>
</div>

<div class="content">
<h3 class="sub-title">Supervise, Monitor and Evaluate the implementation of the Guidance and Counseling Programs in the University.</h3>
</div>
</div>
<div class="item col-lg-4 col-md-6 col-12">
<div class="icon-holder">
<i class="fa-solid fa-crosshairs"></i>
</div>
<div class="content">
<h3 class="sub-title">Initiate the upgrading of competencies of the Guidance Counselors.</h3>
</div>
</div>
<div class="item col-lg-4 col-md-6 col-12">
<div class="icon-holder">
<i class="fa-solid fa-crosshairs"></i>
</div>
<div class="content">
<h3 class="sub-title">Coordinate with the Campus Director in the implementation of the Guidance and Counseling Programs.</h3>
</div>
</div>            
<div class="item col-lg-4 col-md-6 col-12">
<div class="icon-holder">
<i class="fa-solid fa-crosshairs"></i>
</div>
<div class="content">
<h3 class="sub-title">Consolidate reports pertaining to counseling programs.</h3>
<p></p>
</div>
</div>               
<div class="item col-lg-4 col-md-6 col-12">
<div class="icon-holder">
<i class="fa-solid fa-crosshairs"></i>
</div>
<div class="content">
<h3 class="sub-title">Initiate and recommend innovation in the Guidance and Counseling programs of the University.</h3>
<p></p>
</div>
</div>
<div class="item col-lg-4 col-md-6 col-12">
<div class="icon-holder">
<i class="fa-solid fa-crosshairs"></i>
</div>
<div class="content">
<h3 class="sub-title">Perform other functions as may be delegated by Directors and Superiors.</h3>
<p></p>
</div>
</div>           
</div>         
</div>
</section>
</section>

<section id="features" class="features section">

<div class="container text-center">

    <?php 

    $resulta = $conn->query("SELECT * FROM tbl_announcement WHERE department='Guidance' ORDER BY announcementId DESC");

    ?>

    <h2 class="title">"ANNOUNCEMENTS / LATEST NEWS ABOUT GUIDANCE OFFICE"</h2>

    <div class="row">
        <?php while($dataa = $resulta->fetch_assoc()){ ?>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-info mb-3" style="min-height: 400px; max-width: 18rem;">
                        <div class="card-header">Announcement</div>
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?php echo $dataa['date_created']?></h5>
                            <p class="card-text"><?php echo $dataa['announcement']?></p>
                            <div style="width: 100%; height: 200px;">
                                <img class="d-block"  style="height: 100%; width: 100%"src="<?php echo $dataa['image_dir']?> " alt="No Image">
                            </div> 
                        </div>
                    </div>
            </div>
        <?php } ?>
    </div>

</div>

</section>
    
<section id="license" class="license section">
<div class="container">
<div class="license-inner">
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 col-xl-8 mx-auto">
<h2 class="title text-center">Student Information Settings</h2>
<form method="post" action="send_guidance.php">
<div class="my-4">
<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
</li>
</ul>
<form>
<hr class="my-4" />
<div class="form-row">
<div class="form-group">
<strong><label for="emladd">Email Address:</label></strong>
<input type="email" class="form-control" name="emladd" placeholder="Type your email address here....." />
</div>
<br>
<div class="form-group">
<strong><label for="studno">Student No:</label></strong>
<input type="text" name="studno" class="form-control" placeholder="Type your student number here....." />
</div>
<br>
<div class="form-group">
<strong><label for="fn">Student First Name:</label></strong>
<input type="text" name="fn" class="form-control" placeholder="Type your first name here....." />
</div>
</div>
<br>
<div class="form-group">
<strong><label for="mn">Student Middle Name:</label></strong>
<input type="text" name="mn" class="form-control" placeholder="Type your middle name here....." />
</div>
<br>
<div class="form-group">
<strong><label for="ln">Student Last Name:</label></strong>
<input type="text" name="ln" class="form-control" placeholder="Type your last name here....." />
</div>
<br>
<div class="form-group">
<strong><label for="add">Address:</label></strong>
<input type="text" class="form-control" name="add" placeholder="Type your address here....." />
</div>
<br>
<div class="form-row">
<div class="form-group">
<strong><label for="ctc">Contact #:</label></strong>
<input type="text" class="form-control" name="ctc" placeholder="Type your contact number here....." />
</div>
</div>
<br>
<br>
<button type="submit" class="btn btn-primary">Save Changes</button>
</form>
</form>
</div>
</div>
</div>
</div>
<div class="cta-container">
<div class="speech-bubble">                    
<p class="intro">Good day Students!!!<strong>If you have any concerns and questions, just go to the feedback section at the lower part of the website</strong>, you can <a href="#contact">click here.</a> Thank you for your support!</p>
<div class="icon-holder  text-center"><i class="far fa-smile"></i></div>
</div>
<div class="btn-container  text-center">
<a class="btn btn-cta-primary" href="studentHOMEPAGE.php">GO BACK TO HOMEPAGE?</a> 
<br>
<br>
<a class="btn btn-cta-primary" href="studentlogin.php">SIGN OUT</a>                   
</div>
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
<a class="btn btn-cta-primary" href="studentADMISSION.php">ADMISSION OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="studentGUIDANCE.php">GUIDANCE OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="studentOJT.php">OJT AND PLACEMENT</a>
<br>
<br>
<a class="btn btn-cta-primary" href="studentSCHOLARSHIP.php">SCHOLARSHIP AND FINANCE ASSISTANCE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
</div>
</div>

<footer class="footer">
<div class="container text-center">
<small class="copyright">© 2023 Copyright: University of Rizal System Binangonan.</small>
</div>
</footer>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/plugins/prism/prism.js"></script>    
<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
<script src="assets/js/main.js"></script>  
</body>
</html> 

