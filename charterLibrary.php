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
<a class="btn btn-cta-primary" href="adminLIBRARY.php">Back to Home Page</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="docs" class="docs section">
        <div class="container">
            <div class="mb-5 d-flex justify-content-center align-items-center" style="flex-direction: column">
                <div class="text-center font-weight-bold">
                    <h4 >OFFICE OF THE LIBRARY</h4>
                    <h4>CITIZEN'S CHARTER</h4>
                    <h4>BINANGONAN CAMPUS</h4>

                    <h5><i>CAMPUS LIBRARY PERSONNEL</i></h5>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-center">CAMPUS LIBRARIAN</h6>
                        <h5 class="text-center">PERFORMANCE PLEDGE</h5>
                        <div>
                            <small>We the officials and staff of the URS LIBRARY comming ourselves to:</small>
                        </div>

                        <div>
                        <small><b>S</b>erve the academic community of URS promptly efficiently and with utmost courtesy.</small>
                        </div>

                        <div>
                        <small><b>E</b>extend quality service to everybody at all times and at all means.</small>
                        </div>

                        <div>
                        <small><b>R</b>ender extra effort in acquiring various learning and instructional resource materials. </small>
                        </div>

                        <div>
                        <small><b>V</b>alue books and other library resources as sources of knowledge and</small>
                        </div>

                        <div>
                        <small><b>E</b>mpower education through research and academic outputs.</small>
                        </div>

                        <div class="text-center">
                        <small cl>All these pledge</small>
                        </div>

                        <div class="text-center">
                        <small >To provide quality education to everyone</small>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-center">LIBRARY STAFF</h6>
                        <h5 class="text-center">FEEDBACK & REDRESS MECHANISM</h5>

                        <div>
                            <small class="ml-3">We the library services unit personnel have no other desire but to serve the students, faculty and the Administration of URS to the fullest and to the best of out ability.</small>
                        </div>

                        <div>
                            <small class="ml-3">In the name of service, out Assistance to out client is extended with sacrifice, patience, dedication and concerned.</small>
                        </div>

                        <div>
                            <small class="ml-3">Should there be some disatisfaction, incovenience, and disappointments in the quality of service, we render please feel free to express your feedback through.</small>
                        </div>

                        <ul>
                            <li><small>Feedback Form Customer Satisfaction Survey: write a complaint letter directly address to <b>DR. ELVIRA C. PRIETO</b> Head instructional and LIBRARY RESOURCES</small></li>
                            <li><small>Email address: univlibservices@urs.edu.ph or call us through</small></li>
                            <li><small>Phone no: 02-401-4900</small></li>
                            <li><small>Talk to our library office staff </small></li>
                        </ul>

                        <small>You may visit the office to Campus Director of the Head of the instructional and Library Resources Services and express your concerned personally: Rest assured that your complaints will be treated conditionally.</small>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h5 class="text-center">LIBRARY SERVICE UNIT</h5>
                        <p>Schedule of Availability of Service</p>

                        <table class="table table-bordered">
                            <thead>
                                <th>Campus</th>
                                <th>Library Hours</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Angono Campus Library</td>
                                    <td>Monday - Friday, 8:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Antipolo Campus Library</td>
                                    <td>Monday - Friday, 8:00 AM - 5:00 PM Saturday, 8:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Binangonan Campus Library</td>
                                    <td>Monday - Satuday, 8:00 AM - 6:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Cainta Campus Library</td>
                                    <td>Monday - Friday, 8:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Cardona Campus Library</td>
                                    <td>Monday - Friday, 8:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Morong Campus Library</td>
                                    <td>Monday - Friday, 7:00 AM - 6:00 PM Saturday, 8:30 AM - 5:30 PM</td>
                                </tr>
                                <tr>
                                    <td>Pililla Campus Library</td>
                                    <td>Monday - Saturday, 8:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Rodriguez Campus Library</td>
                                    <td>Monday - Saturday, 8:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Tanay Campus Library</td>
                                    <td>Monday - Friday, 7:00 AM - 5:00 PM</td>
                                </tr>
                                <tr>
                                    <td>Taytay Campus Library</td>
                                    <td>Monday - Friday, 8:00 AM - 5:00 PM</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <h5 class="text-center">NO NOON BREAK</h5>
                <small>How to Avail the Services: </small>

                <div class="" style="border 1px solid black; width: 100%; padding: 5px;" >
                    <small>AUTOMATED TRANSACTION CIRCULATION</small>
                </div>

                <table class="table table-bordered table-light" style="width: 90%;">
                    <thead>
                        <th colspan="2" rowspan="2">STEPS PROCESS TO BE TAKEN BY</th>
                        <th rowspan="2">DURATION</th>
                        <th rowspan="2">REQUIREMENTS </th>
                        <th rowspan="2">FEES</th>
                        <th rowspan="2">PERSON RESPONSIBLE</th>
                        <th rowspan="2">LOCATION</th>
                    </thead>
                    <tbody>
                        <tr>
                            
                            <td colspan="1">Client</td>
                            <td colspan="1">Provider</td>
                            
                        </tr>

                        <tr>
                            <td colspan="7">A. REGISTRATION</td>
                        </tr>

                        <tr>
                            <td>Present Library Card</td>
                            <td>Check the library card and verify if the researcher is a bonatide student</td>
                            <td>5 sec</td>
                            <td>Library Card</td>
                            <td>
                                
                            </td>
                            
                            <td>Library Personnel</td>
                            <td>Circulation Counter</td>
                        </tr>

                        <tr>
                            <td colspan="7">B. ACCESS TO LIBRARY RESOURCES</td>
                        </tr>

                        <tr>
                            <td>Proceed to the computer terminals and search for the title, author, subject, or keyword</td>
                            <td>Get the book from the shelves</td>
                            <td>24 sec</td>
                            <td></td>
                            <td>
                                
                            </td>
                            <td>Library Personnel</td>
                            <td>Library</td>
                        </tr>

                        <tr>
                            <td colspan="7" class="text-center">END OF TRANSACTION</td>
                        </tr>

                        <tr>
                            <td colspan="7" >C. LOANING OF OF LIBRARY RESOURCES</td>
                        </tr>

                        <tr>
                            <td>Proceed to the circulation resources</td>
                            <td>Receive book card, </td>
                            <td>5 sec</td>
                            <td>Library Card</td>
                            <td>
                                
                            </td>
                            <td>Library Personnel</td>
                            <td>Circulation Counter</td>
                        </tr>

                        <tr>
                            <td colspan="7" >D. RETURNING OF LOAN/ED OUT RESOURCES</td>
                        </tr>

                        <tr>
                            <td>Check in the boxes </td>
                            <td>Check the accession of the book presented</td>
                            <td>5 sec</td>
                            <td>Learned Materials</td>
                            <td>
                                
                            </td>
                            <td>Library Personnel</td>
                            <td>Circulation Counter</td>
                        </tr>

                    </tbody>
                </table>

            </div>
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

