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
<link rel="stylesheet" href="assets/css/styleorg.css">
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
<span class="logo-title">Organizational Charts</span>
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
<li class="nav-item last"><a class="nav-link " href="studentSETTINGS.php">SETTINGS</a></li>
<li class="nav-item last"><a class="nav-link " href="logout.php">LOG OUT</a></li>                       
</ul>
</div>
</div>
</nav>
</header>

<section id="promo" class="promo section offset-header">
<div class="container text-center">
<i><p class="intro">"Nurturing Tomorrow's Noblest"</p></i>
<div class="btns">
<a class="btn btn-cta-primary" href="studentHOMEPAGE.php">Back to Home Page</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Registrar Office Organizational Chart"</h2>

<?php 
    
        $result = $conn->query("SELECT * FROM orgchart WHERE department='Registrar'");
        // $result = $conn->query($sql);

        
    
    ?>

        <div class="row d-flex justify-content-center">
        
            
                <?php while($data = $result->fetch_assoc()){ ?>
                    <div class="col-md-4 d-flex">

                        <div class="card d-flex flex-column justify-content-center align-items-center mt-3 pt-3" style="height: 300px; width: 100%; ">
                        <img class="card-img-top sub-title" src="<?php echo $data['image_dir']?> " alt="Card image cap" style="height: 50%; width: 40%; border-radius: 50%; border: 8px solid gray;">
                        <div class="card-body" >
                            <h5 class="card-title text-center"> <i class="fa-solid fa-crosshairs"></i>  <?php echo $data['member_name'];?></h5>
                            <p class="card-text text-center"><?php echo $data['member_position']?></p>
                        </div>
                        </div>

                    </div>

                <?php } ?>
        </div>

        
</section>

<hr style="width: 80%; margin: 0 auto;">

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Health Office Organizational Chart"</h2>

<?php 
    
        $result = $conn->query("SELECT * FROM orgchart WHERE department='Clinic'");
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

    
</div>

</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Library Office Organizational Chart"</h2>
<?php 
    
        $result = $conn->query("SELECT * FROM orgchart WHERE department='Librarian'");
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
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Office of the Student Development Services Organizational Chart"</h2>
<?php  
        $result = $conn->query("SELECT * FROM orgchart WHERE department='OSDS'"); 
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
</section>

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