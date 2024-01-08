<?php
require 'db_conn.php';

session_start();

$adminId =  $_SESSION['admin_id'];
$office = $_SESSION['office_name'];

if(!isset($_SESSION['admin_id'])){
    header("Location: adminindex.php");
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
<link rel="stylesheet" href="assets/css/popup2.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
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
    
<header id="" class="header">                          
<nav id="main-nav" class="main-nav navbar navbar-expand-md">
<div class="container-fluid">
<div><a href="#"><img src="urslogo6.png"></a></div>
<a class="navbar-brand logo " href="#promo">
<span class="logo-title">Settings</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
<!-- <li class="nav-item sr-only"><a class="nav-link scrollto" href="#promo">Home</a></li>
<li class="nav-item sr-only"><a class="nav-link scrollto" href="#adminHOMEPAGE.php">Home</a></li> -->
<!-- <li class="nav-item"><a class="nav-link scrollto" href="#features">ANNOUNCEMENTS</a></li>  -->
<!-- <li class="nav-item"><a class="nav-link" href="adminFAQS.php">ADD FAQS</a></li> -->
<li class="nav-item"><a class="nav-link" href="adminchat.php?adminId=<?php echo $adminId?>">LIVE CHAT</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="chat_registrar.php">CHAT BOT</a></li> -->
<li class="nav-item"><a class="nav-link" href="studentAccountRequest.php">STUDENT REQUEST ACCOUNT</a></li>
<li class="nav-item"><a class="nav-link" href="chatReport.php">REPORTS</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="settings.php">SETTINGS</a></li> -->
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
<a class="btn btn-cta-primary" href="adminREGISTRAR.php">Back to Home Page</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="docs" class="docs section">
        <div class="container">
            <div class="mb-5 d-flex justify-content-center align-items-center">
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addAnnouncement">
                Add Announcement
            </button>

            <!-- Modal -->
            <div class="modal fade" id="addAnnouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Announcement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                        <form action="adminREGISTRAR_ANNOUNCEMENT_add.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="office" id="office" value="<?php echo $office?>" class="d-none form-control"  required>
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

            <!-- End Modal -->


            <!-- Start Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#faqModal">
            Add Frequently Asked Questions
            </button>

            <div class="modal fade" id="faqModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add FAQS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="adminREGISTRAR_FAQS_add.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Enter Question</label>
                            <input type="text" name="question" id="question" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Enter Answer</label>
                            <textarea name="answer" id="answer" class="form-control" required cols="3" rows="3">

                            </textarea>
                            <!-- <input type="text" name="office-description" id="office-description" class="form-control" required> -->
                        </div>
                        <input type="text" name="department" id="department" value="<?php echo $office?>" class="d-none form-control" required>
                        <!-- <div class="form-group">
                            <select name="department" id="department" class="form-control" required>
                                <option value="" >Select Department</option>
                                <option value="Registrar">Registrar Office</option>
                                <option value="Clinic">Clinic Office</option>
                                <option value="Library">Library Office</option>
                                <option value="Admission">Admission Office</option>
                                <option value="Guidance">Guidance Office</option>
                                <option value="OJT">OJT and Placement</option>
                                <option value="Scholarship">Scholarship and Finance Assistance</option>
                            </select>
                        </div> -->

                        <input type="submit" name="submit" value="Add FAQ" class="form-control btn-primary">

                    </form>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <input type="submit" name="submit" value="Add"> -->
                </div>
                </div>
            </div>
            </div>

            <!-- End Modal -->
                <!-- <a href="add_registrar_announcement.php" class="btn btn-primary " style="margin-right: 10px;">Add Announcement</a> -->
                <!-- <a href="adminFAQS.php" class="btn btn-primary " style="margin-right: 10px;">Add FAQS</a> -->
                <!-- <a href="adminOFFICE.php" class="btn btn-primary " style="margin-left: 10px;" >Add Campus OFFICES</a> -->

            </div>
           
            <div class="docs-inner">
            <h2 class="title text-center">Admin Information Settings</h2>      
            
            <?php 
            
            $sql = "SELECT * FROM admins WHERE admin_id='$adminId'";
            $result = $conn->query($sql);
            
            ?>

            <?php if($result->num_rows > 0){?>
                <?php while($rows = $result->fetch_assoc()){?>
            <form action="" method="POST">

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" value="<?php echo $rows['email'];?>" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="">Office Name</label>
                        <input type="email" value="<?php echo $rows['office_name'];?>" class="form-control">
                    </div>

                    
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="">Password</label>
                        <input type="password" value="<?php echo $rows['password'];?>" class="form-control">
                    </div>
                </div>
            </form>

                <?php } ?>
            <?php } ?>
            <!-- <div class="block">
        
            <div class="block">
                <h3 class="sub-title text-center"></h3>
                <p></p>
                <br>
                <br>
                <br>
                <p class="text-center">
                    <a class="btn btn-cta-primary" href="logout.php">SIGN OUT</a>
                </p>
            </div>
            
            </div>          -->
        </div><!--//container-->
    </section><!--//features-->

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

