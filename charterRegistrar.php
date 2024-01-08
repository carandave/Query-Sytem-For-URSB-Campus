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
            <div class="mb-5 d-flex justify-content-center align-items-center" style="flex-direction: column">
                <div class="text-center font-weight-bold">
                    <h4 >OFFICE OF THE REGISTRAR</h4>
                    <h4>CITIZEN'S CHARTER</h4>
                    <h4>BINANGONAN CAMPUS</h4>

                    <h5><i>ISSUANCE OF TRANSCRIPT OF RECORDS, SCHOLASTIC RECORDS</i></h5>
                </div>

                <div class="text-left">
                    <p class="mb-0"><b>Schedule of Availability of Service:</b></p>
                    <div class="ml-5">
                        <span>Monday - Friday</span>
                        <span>8:00 am - 5:00 pm without noon break</span>
                    </div>

                    <p class="mt-3 mb-0"><b>Who may avail the service:</b></p>
                    <div class="ml-5">
                        <span>Students, Graduates, Parents, Faculty, and Staff and People from other Agencies</span>
                    </div>

                    <p class="mt-3 mb-0"><b>What are the Requeirements:</b></p>
                    <div class="ml-5">
                        <span>Identification Cards</span>
                        <span>Official Receipt from the Cashier</span>
                        <span>Pictures</span>
                        <span>Authorization Letter (if necessary)</span>
                    </div>

                    <p class="mt-3 mb-0"><b>How to avail of the service:</b></p>
                    
                </div>

                <table class="table table-bordered table-light" style="width: 90%;">
                    <thead>
                        <th>Steps</th>
                        <th>Applicant / Client</th>
                        <th>Service Provider</th>
                        <th>Duration of Acitivity</th>
                        <th>Person in Charge</th>
                        <th>Fees</th>
                        <th>Form</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Proceed to the Registrar's Office and secure request form and clearance</td>
                            <td>Explain to the student the service and its requirements </td>
                            <td>5 mins</td>
                            <td>
                                <p>Marlene S. Julian</p>
                                <p>Roselle Joy M. Bitong</p>
                                <p>Michael Arada</p>
                            </td>
                            
                            <td></td>
                            <td>Request Form</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Fill up the form and pay at the cashier's office</td>
                            <td>Receive the payment for the requested credentials</td>
                            <td></td>
                            <td>
                                <p>Ethel Manal</p>
                            </td>
                            
                            <td></td>
                            <td>Request Form</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Accomplish the clearance</td>
                            <td></td>
                            <td></td>
                            <td>
                                <p></p>
                            </td>
                            
                            <td></td>
                            <td>Clearance Form</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Submit the accomplished form and clearance at the registra's office</td>
                            <td>Receive and review the form and the student clearance and indicate the due date time</td>
                            <td>5 mins</td>
                            <td>
                                <p>Marlene S. Julian</p>
                                <p>Roselle Joy M. Bitong</p>
                                <p>Michael Arada</p>
                            </td>
                            
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td></td>
                            <td>
                                <p>Check the records of the student</p>
                                <p>Certification of Good Moral Character</p>
                                <p>Certification of Graduation</p>
                                <p>Transfer Credentials</p>
                                <p>Scholastic Record</p>
                                <p>Transcript of Records</p>
                                <p>Transcript of Records (GS)</p>
                                <p>Certificate (GS)</p>
                            </td>
                            <td>
                                <p>5 mins</p>
                                <p>5 mins</p>
                                <p>5 mins</p>
                            </td>
                            <td>
                                <p>Marlene S. Julian</p>
                                <p>Roselle Joy M. Bitong</p>
                                <p>Michael Arada</p>
                            </td>
                            
                            <td>
                                <p>P 20</p>
                                <p>P 20</p>
                                <p>P 20</p>
                                <p>P 50</p>
                                <p>P 100</p>
                                <p>P 100</p>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>
                                <p>Proceed to the registrar's office to claim the documents requested</p>
                            </td>
                            <td>
                                Issue the requested documents and ask the student to sign in the logbook
                            </td>
                            <td>5 mins</td>
                            <td>
                                <p>Marlene S. Julian</p>
                                <p>Roselle Joy M. Bitong</p>
                                <p>Michael Arada</p>
                            </td>
                            
                            <td>
                                
                            </td>
                            <td>Claiming Slip</td>
                        </tr>
                        <tr>
                            <td colspan="7" class="text-center">end of transaction</td>
                        </tr>
                        
                        
                    </tbody>
                </table>

                <div class="text-center font-weight-bold">
                    <h4 >SCHEDULE OF RELEASE OF REQUESTED DOCUMENTS</h4>
                </div>

                <div class="row bg-light p-4" style="width: 90%; ">
                    <div class="col-md-5">
                        <p>Transfer Credentials</p>
                        <p>Certificate of Grades</p>
                        <p>Certificate of Graduation</p>
                        <p>Certificate of Authentication and Verification</p>
                    </div>

                    <div class="col-md-2">
                        <p>- 20 pesos</p>
                        <p>- 20 pesos</p>
                        <p>- 20 pesos</p>
                        <p>- 20 pesos</p>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center align-items-center" style="border-left: 1px solid black">
                        <p>After three (3) working days</p>
                    </div>
                </div>

                <div class="row bg-light p-4" style="width: 90%; border-top: 1px solid black">
                    <div class="col-md-5">
                        <p>Transcript of Records</p>
                    </div>

                    <div class="col-md-2" >
                        <p>- 50 pesos/page</p>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center align-items-center" style="border-left: 1px solid black">
                        <p>After two (2) working days</p>
                    </div>
                </div>

                <div class="text-center">
                    <small class="">For any inquiries, Kindly contact us at 8652-34-81 or email us at ursbregistrar_binangonan@yahoo.com</small>
                </div>



                  



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

