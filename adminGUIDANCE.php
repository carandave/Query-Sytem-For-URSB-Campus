<?php
require 'db_conn.php';
session_start();
$adminId = $_SESSION['admin_id'];

if(!isset($_SESSION['admin_id'])){
    header("Location: adminlogin.php");
}
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
<link rel="stylesheet" href="assets/css/stylesimages.css">
<script defer src="assets/js/orgchart.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<!-- <li class="nav-item"><a class="nav-link scrollto" href="#features">ANNOUNCEMENTS</a></li>
<li class="nav-item last"><a class="nav-link " href="adminFAQS.php">ADD FAQS</a></li> -->
<li class="nav-item"><a class="nav-link" href="adminchat.php?adminId=<?php echo $adminId?>">LIVE CHAT</a></li>
<li class="nav-item"><a class="nav-link" href="chat_guidance.php">CHAT BOT</a></li> 
<li class="nav-item"><a class="nav-link " href="settings_Guidance.php">SETTINGS</a></li>  
<li class="nav-item"><a class="nav-link" href="chatReport.php">REPORTS</a></li>
<li class="nav-item last"><a class="nav-link " href="logout.php">LOG OUT</a></li> 
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
    
<section id="about" class="about section">
    
<div class="container">
<h2 class="title text-center">"Organizational Chart Guidance Office"</h2>


<div class="content">

    <div class="row">
        
        <div class="col-md-12 d-flex justify-content-end flex-column">

        

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Guidance Office Member
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Guidance Office Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="adminADMISSION_add.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Member Name</label>
                            <input type="text" name="member-name" id="member-name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Position Description</label>
                            <input type="text" name="member-position" id="member-position" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="userfile[]" id="userfile" value="" multiple="">
                        </div>

                        <input type="submit" name="submit" value="Add" class="form-control btn-primary">

                    </form>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <input type="submit" name="submit" value="Add"> -->
                </div>
                </div>
            </div>
            </div>
            <!-- <h4 for="">Add Chart Member</h4>
            <input type="file" class="form-control" placeholder="Input"> -->
        </div>
    </div>

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

<!-- Modal -->
<div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Guidance Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    <form action="adminGUIDANCE_ANNOUNCEMENT_add.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Announcement</label>
                            <!-- <textarea name="announcement" id="announcement" cols="10" rows="5" class="form-control" required>

                            </textarea> -->
                            <input type="text" name="announcement" id="announcement" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="userfile[]" id="userfile" value="" multiple="">
                        </div>

                        <input type="submit" name="submit" value="Add" class="form-control btn-primary">

                    </form>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <input type="submit" name="submit" value="Add"> -->
                </div>
                </div>
            </div>
            </div>
            

            <section id="features" class="about section">

<div class="container text-center">
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#announcementModal">
        Add Guidance Announcement
    </button> -->

    <?php 

    $resulta = $conn->query("SELECT * FROM tbl_announcement WHERE department='Guidance' ORDER BY announcementId DESC");

    ?>

    <h2 class="title">"Announcements and Latest News About the Guidance Office"</h2>

    <div class="row">
        <?php while($dataa = $resulta->fetch_assoc()){ ?>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="card text-white bg-info mb-3" style="min-height: 400px; max-width: 18rem;">
                        <div class="card-header">Announcement</div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dataa['date_created']?></h5>
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
<small class="copyright">© 2023 Copyright: University of Rizal System Binangonan.</small>
</div>
</footer>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/plugins/prism/prism.js"></script>    
<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
<script src="assets/js/main.js"></script>  
</body>
</html> 

