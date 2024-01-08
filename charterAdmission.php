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
<a class="btn btn-cta-primary" href="adminADMISSION.php">Back to Home Page</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="docs" class="docs section">
        <div class="container">
            <div class="mb-5 d-flex justify-content-center align-items-center" style="flex-direction: column">
            <div class="text-center font-weight-bold">
                    <h4 >OFFICE OF THE ADMISSION</h4>
                    <h4>CITIZEN'S CHARTER</h4>
                    <h4>BINANGONAN CAMPUS</h4>

                    <h5>OFFICE OF THE STUDENT DEVELOPMENT AND SERVICES</h5>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-center">PERFORMANCE PLEDGE</h5>
                        <div>
                            <small>We the staff of the office of Student Development Services commit ourselves to provide: </small>
                        </div>

                        <div>
                        <small><b>S</b>ervice with compliance to service standard to bring out effective results.</small>
                        </div>

                        <div>
                        <small><b>A</b>ccomplish all the needs of the clients with competence and accuracy.</small>
                        </div>

                        <div>
                        <small><b>V</b>alue every student and people who longed for our services to the highest standard, and,</small>
                        </div>

                        <div>
                        <small><b>E</b>nsure all our clients that the services rendered with integrity and efficiency from Mondays to Friday, 8:00 am  to 5:00pm.</small>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h5 class="text-center">FEEDBACK & REDRESS MECHANISM</h5>

                        <div>
                            <small class="ml-3">We at the Office of Student Development Service value need to served out clients with dedication and humility from the moment you come for assistance until such time when you secured ther services you need.</small>
                        </div>

                        <div>
                            <small class="ml-3">If for any reason during the course of securing a particular service you feel that you have not been served as expected, please feel free to express your feedback through.</small>
                        </div>

                        <ul>
                            <li><small>Feedback Form Customer Satisfaction Survey:</small></li>
                            <li><small>Email address: urs_studentservices@yahoo.com or call us through</small></li>
                            <li><small>Phone no: 099-36-05</small></li>
                            <li><small>Talk to our OSDS Office Staff </small></li>
                        </ul>

                        <div>
                        <small>A. Report the inhospitable service and give us the particular complaint to the OSDDS Directior Head of unit concerend the Director Head of unit will then call the attention of the concerned employee, You may do this personally/verbally, through a formal letter, telephone call or through email.</small>
                        </div>

                        <div>
                            <small>B. Talk to our officer of the day and fill out the Customer Feedback Form stating some of your comments and suggestion, recommendations, request for assistance, and complaints</small>
                        </div>
                        
                    
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <h5 class="text-center">STUDENT DEVELOP SERVICES OFFICE</h5>
                        <p>STUDENT ADMISSION: ISSUANCE OF COLLEGE ADMISSION TEST PERMIT</p>

                        
                        <p class="mb-0"><b>Schedule of Service:</b></p>
                        <div class="ml-5">
                            <span>Monday - Friday</span>
                            <span>8:00 am - 5:00 pm without noon break</span>
                        </div>

                        <p class="mb-0"><b>Who may avail the service: Student-Applicants</b></p>

                        <div class="row">
                            <div class="col-md-6">
                                <h6>Requirements For Freshman:</h6>
                                <div>
                                    <small>Certified True Copy</small>
                                    <ul>
                                        <li><small>Highschool Card (Form 138-Photo Copy)</small></li>
                                        <li><small>Certificate of Good moral (Photo Copy)</small></li>
                                        <li><small>Birth Certificate (Photo Copy)</small></li>
                                        <li><small>2 Copies of recent 1x1 ID Picture</small></li>
                                        <li><small>P100 Admission Fee</small></li>
                                        <li><small>Chest X-Ray and Drug Test</small></li>
                                    </ul>
                                    <p><b>Total Processing Time: 15 mins</b></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h6>For Transferees:</h6>
                                <div>
                                    <small>Certified True Copy</small>
                                    <ul>
                                        <li><small>Transfer Credentials (Honorable Dismissal)</small></li>
                                        <li><small>For evaluation purposeL: Transcript of Records or Scholastic Records</small></li>
                                        <li><small>Certificate of Good moral (Photo Copy)</small></li>
                                        <li><small>2 Copies of recent 1x1 ID Picture</small></li>
                                        <li><small>P100 Admission Fee</small></li>
                                        <li><small>Chest X-Ray and Drug Test</small></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
                
                <p>How to Avail the services:</p>
                <table class="table table-bordered table-light" style="width: 90%;">
                    <thead>
                        <th>Steps</th>
                        <th>Applicant / Client</th>
                        <th>Service Provider</th>
                        <th>Duration of Acitivity</th>
                        <th>Person in Charge</th>
                        <th>Fees</th>
                        <th>Form/Documents</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Inquire for student admission requirements</td>
                            <td>Issue leaflets containing the curricular offering of the University schedule of examinations and requirements for application </td>
                            <td>1 min</td>
                            <td>
                                <p>Officer of the day</p>
                            </td>
                            
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Present the requirements needed for student admission</td>
                            <td>Scrutirize the submitted requirements and issue application uppon payment with a corresponsing official receipt.</td>
                            <td>3 mins</td>
                            <td>
                                <p>Admission Officer</p>
                            </td>
                            
                            <td>P100.00 (Admission Fee)</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Fill-up the Application Form</td>
                            <td>Accomplish the Application Form for admission test</td>
                            <td>3 minutes </td>
                            <td>
                                <p>Admission Officer</p>
                            </td>
                            
                            <td></td>
                            <td>Application Form</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>File Application Form</td>
                            <td>Review the fill up application form and advise the applicant to report to the college</td>
                            <td>5 mins</td>
                            <td>
                                <p>Admission Office Clerk</p>
                            </td>
                            
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Will be interviewed by the College Dean</td>
                            <td>
                                <p>Interview and submit Student Applicant's Application Form and interview rating</p>
                            </td>
                            <td>
                            </td>
                            <td>
                                <p>College Dean</p>
                            </td>
                            
                            <td>
                                
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>
                                <p>Submit Application Form</p>
                            </td>
                            <td>
                                Issue an examination permit stating the date of examination time and room assignment to the applicant
                            </td>
                            <td>3 mins</td>
                            <td>
                                <p>Admission Officer / Clerk</p>
                                
                            </td>
                            
                            <td>
                                
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="7" class="text-center">End of transaction</td>
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

