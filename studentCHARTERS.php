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
<span class="logo-title">Citizen Charter</span>
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
<h2 class="title text-center">"Registrar Office"</h2>
<div class="row">
<div class="mb-5 d-flex justify-content-center align-items-center mt-5" style="flex-direction: column">
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
</div>         
</div>
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Health Office"</h2>
<div class="row">
<div class="mb-5 mt-5">
                <div class="text-center font-weight-bold">
                    <h4 >OFFICE OF THE CLINIC</h4>
                    <h4>CITIZEN'S CHARTER</h4>
                    <h4>BINANGONAN CAMPUS</h4>

                    <h5><i>HEALTH SERVICES</i></h5>
                </div>

                <div class="row">
                    <div class="col-md-4" style="">
                        <h6>1. Medical Consultation</h6>
                        <span>Consultation is the process of getting advice from a doctor or other expert</span>

                        <div class="row d-flex mt-3" style="width: 100%:">
                            <div class="col-md-4 bg-primary p-3">
                                <h6 style="height: 50px; color: white;">Office of Division:</h6>
                                <h6 style="height: 50px; color: white;">Classification:</h6>
                                <h6 style="height: 50px; color: white;">Type of Transaction:</h6>
                                <h6 style="height: 50px; color: white;">Who May Avail:</h6>
                            </div>

                            <div class="col-md-8 bg-light p-3">
                                <h6 style="height: 50px;">Medical Services</h6>
                                <h6 style="height: 50px;">Simple</h6>
                                <h6 style="height: 50px;">G2C- Government to Citizen</h6>
                                <h6 style="height: 50px;">All Students, Faculty, Staff and Stakeholders</h6>
                            </div>
                        </div>

                        <div class="row ml-0 pl-0 p-0" style="overflow-x: scroll">
                            <div class="col-md-12" >
                                <table class="table table-bordered table-light table-sm " >
                                <thead>
                                    <th><small>CLIENT STEPS</small></th>
                                    <th><small>AGENCY ACTIONS</small></th>
                                    <th><small>FEES TO BE PAID</small></th>
                                    <th><small>PROCESSING TIME</small></th>
                                    <th><small>PERSON RESPONSIBLE</small></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <small>1. Inquiry</small>
                                            <small>Approach the nurse in charge and give some necessary data</small>
                                        </td>
                                        <td>
                                            <small>1.1 Ask the consultation</small>
                                            <small>1.2 Look for the medical records</small>
                                            <small>1.3 Login</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>3 mins</small>    
                                        </td>
                                        <td>
                                            <small>Nurse in charge</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>2. Waiting for assessment</small>
                                        </td>
                                        <td>
                                            <small>2.1 Conduct initial assessment, Identify patient's case if Emergency or not.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Nurse in charge</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <small></small>
                                        </td>
                                        <td>
                                            <small>2.2 Nursing management and referral to Physician.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Nurse in charge</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small></small>
                                        </td>
                                        <td>
                                            <small>2.3 Physician assessment and conduct Physical Examination.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>10 mins</small>    
                                        </td>
                                        <td>
                                            <small>Physician on Duty</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small></small>
                                        </td>
                                        <td>
                                            <small>2.4 Evaluation and Treatment.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Physician on Duty</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small></small>
                                        </td>
                                        <td>
                                            <small>2.5 Prescribe medicines according to the medical condition and follow up consultation.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Physician on Duty</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>3. Referred back to Nurse in Charge</small>
                                        </td>
                                        <td>
                                            <div>
                                                <small>3.1 Carry out doctor's order and issuance of available medicines.</small>
                                            </div>
                                            <div>
                                                <small>3.2 Updated medical records and medicine consumption log book.</small>
                                            </div>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Physician on Duty</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>4. Patient to discharge</small>
                                        </td>
                                        <td>
                                            <small>4.1 Adviced.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>2 mins</small>    
                                        </td>
                                        <td>
                                            <small>Nurse in Charge</small>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                    </div>

                    

                    <div class="col-md-4">
                        <h6>2. Medical Consultation and Referral</h6>
                            <span>Consultation and Referral is a personal evaluation followed by interventions or recommendations provided by a physician who has specific expertise</span>

                            <div class="row d-flex mt-3" style="width: 100%:">
                                <div class="col-md-4 bg-primary p-3">
                                    <h6 style="height: 50px; color: white;">Office of Division:</h6>
                                    <h6 style="height: 50px; color: white;">Classification:</h6>
                                    <h6 style="height: 50px; color: white;">Type of Transaction:</h6>
                                    <h6 style="height: 50px; color: white;">Who May Avail:</h6>
                                </div>

                                <div class="col-md-8 bg-light p-3">
                                    <h6 style="height: 50px;">Medical Services</h6>
                                    <h6 style="height: 50px;">Simple</h6>
                                    <h6 style="height: 50px;">G2C- Government to Citizen</h6>
                                    <h6 style="height: 50px;">All Students, Faculty, Staff and Stakeholders</h6>
                                </div>
                            </div>

                            <div class="row ml-0 pl-0 p-0" style="overflow-x: scroll">
                                <div class="col-md-12" >
                                    <table class="table table-bordered table-light table-sm " >
                                    <thead>
                                        <th><small>CLIENT STEPS</small></th>
                                        <th><small>AGENCY ACTIONS</small></th>
                                        <th><small>FEES TO BE PAID</small></th>
                                        <th><small>PROCESSING TIME</small></th>
                                        <th><small>PERSON RESPONSIBLE</small></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <small>1. Inquiry</small>
                                                <small>Approach the nurse in charge and give some necessary data</small>
                                            </td>
                                            <td>
                                                <small>1.1 Ask the consultation</small>
                                                <small>1.2 Look for the medical records</small>
                                                <small>1.3 Login</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>3 mins</small>    
                                            </td>
                                            <td>
                                                <small>Nurse in charge</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small>2. Waiting for assessment</small>
                                            </td>
                                            <td>
                                                <small>2.1 Conduct initial assessment, Identify patient's case if Emergency or not.</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>5 mins</small>    
                                            </td>
                                            <td>
                                                <small>Nurse in charge</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <small></small>
                                            </td>
                                            <td>
                                                <small>2.2 Nursing management and referral to Physician.</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>5 mins</small>    
                                            </td>
                                            <td>
                                                <small>Nurse in charge</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small></small>
                                            </td>
                                            <td>
                                                <small>2.3 Physician assessment and conduct Physical Examination.</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>10 mins</small>    
                                            </td>
                                            <td>
                                                <small>Physician on Duty</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small></small>
                                            </td>
                                            <td>
                                                <small>2.4 Evaluation and Treatment.</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>5 mins</small>    
                                            </td>
                                            <td>
                                                <small>Physician on Duty</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <small></small>
                                            </td>
                                            <td>
                                                <small>2.5 Prescribe medicines according to the medical condition and follow up consultation.</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>5 mins</small>    
                                            </td>
                                            <td>
                                                <small>Physician on Duty</small>
                                            </td>
                                        </tr>

                                        <tr>
                                        <td>
                                            <small>3. Referred back to Nurse in Charge</small>
                                        </td>
                                        <td>
                                            <div>
                                                <small>3.1.1 Carry out doctor's order and issuance of available medicines.</small>
                                            </div>
                                            <div>
                                                <small>3.1.2 Prepare for transfer to Hospital of Choice.</small>
                                            </div>
                                            <div>
                                                <small>3.2.1 Updated medical records and medicine consumption log book.</small>
                                            </div>
                                            <div>
                                                <small>3.2.2 Endorsed patient case to Nurse in charge at Emergency Room.</small>
                                            </div>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Physician on Duty</small>
                                        </td>
                                    </tr>

                                        <tr>
                                            <td>
                                                <small>4. Patient to discharge</small>
                                            </td>
                                            <td>
                                                <small>4.1 Adviced.</small>
                                            </td>
                                            <td>
                                                <small>None</small>
                                            </td>
                                            <td>
                                                <small>2 mins</small>    
                                            </td>
                                            <td>
                                                <small>Nurse in Charge</small>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                    <h6>3. Dental Consultation and Treatment</h6>
                        <span>Operates and maintains the dental clinic's infection control and prevention protocols and carries out dental examinations and treatments of students, faculty, employees.</span>

                        <div class="row d-flex mt-3" style="width: 100%:">
                            <div class="col-md-4 bg-primary p-3">
                                <h6 style="height: 50px; color: white;">Office of Division:</h6>
                                <h6 style="height: 50px; color: white;">Classification:</h6>
                                <h6 style="height: 50px; color: white;">Type of Transaction:</h6>
                                <h6 style="height: 50px; color: white;">Who May Avail:</h6>
                            </div>

                            <div class="col-md-8 bg-light p-3">
                                <h6 style="height: 50px;">URS Dental Health Services</h6>
                                <h6 style="height: 50px;">Dental Health Services</h6>
                                <h6 style="height: 50px;">G2C- Government to Citizen</h6>
                                <h6 style="height: 50px;">Students, Teachers and Personnel</h6>
                            </div>
                        </div>

                        <div class="row ml-0 pl-0 p-0" style="overflow-x: scroll">
                            <div class="col-md-12" >
                                <table class="table table-bordered table-light table-sm " >
                                <thead>
                                    <th><small>CLIENT STEPS</small></th>
                                    <th><small>AGENCY ACTIONS</small></th>
                                    <th><small>FEES TO BE PAID</small></th>
                                    <th><small>PROCESSING TIME</small></th>
                                    <th><small>PERSON RESPONSIBLE</small></th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div>
                                                <small>1. Registration</small>
                                            </div>
                                            <div>
                                                <small>1.1. Approach Dental Aide</small>
                                            </div>
                                            <div>
                                                <small>1.2 State the nature of dental complain</small>
                                            </div>
                                            
                                        </td>
                                        <td>
                                            <small>1.1 Retrieve Individual Dental Health Record Chart (If old)</small>
                                            <small>1.2 If new create new chart</small>
                                            
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>3 mins</small>    
                                        </td>
                                        <td>
                                            <small>Pamela B. Balajadia</small>
                                            <small>Dental Aide</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>2. Wait at the receiving area to be called by the dental aide</small>
                                        </td>
                                        <td>
                                            <small>2.1 Prepare diagnostic tools</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>3 mins</small>    
                                        </td>
                                        <td>
                                            <small>Pamela B. Balajadia</small>
                                            <small>Dental Aide</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>3. Sit on the dental chair.</small>
                                        </td>
                                        <td>
                                            <small>3.1 Conduct Dental examination, evaluation and initial assessment.</small>
                                            <small>3.2 Record Patient's Dental History</small>
                                            <small>3.3 Conduct initial Diagnosis and treatment plan</small>
                                            <small>3.4 Inform the patient on treatment procedure</small>
                                            <small>Upon Agreement</small>
                                            <small>3.5 Set reappointment date or</small>
                                            <small>3.6 Perform Treatment Procedures</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dr. Godwin A. Olivas</small>
                                            <small>Dentist</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>Treatment Procedures</small>
                                        </td>
                                        <td>
                                            <small>3.7 Patient evaluation and Assessment.</small>
                                            <small>3.8 (Tooth Extraction) permanent teeth.</small>
                                            <small>3.9 Prescription of Medication.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>15 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dr. Godwin A. Olivas</small>
                                            <small>Dentist</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>Treatment Procedures</small>
                                        </td>
                                        <td>
                                            <small>3.10 Patient evaluation and Assessment.</small>
                                            <small>3.11 (Tooth Extraction) permanent teeth.</small>
                                            <small>3.12 Prescription of Medication.</small>
                                        </td>
                                        <td>
                                            <small>Php 50.00</small>
                                        </td>
                                        <td>
                                            <small>20 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dental Health Services/Cashier</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>Treatment Procedures</small>
                                        </td>
                                        <td>
                                            <small>3.13 Patient evaluation and Assessment.</small>
                                            <small>3.14 Long Term Tooth Reservation (Permanent Teeth only).</small>
                                        </td>
                                        <td>
                                            <small>Php 150.00</small>
                                        </td>
                                        <td>
                                            <small>15 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dental Health Services/Cashier</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>Treatment Procedures</small>
                                        </td>
                                        <td>
                                            <small>3.15 Patient evaluation and Assessment.</small>
                                            <small>3.16 Short Term Tooth Reservation (Primary / Permanent Teeth only).</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>10 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dr Godwin A. Olivas (Dentist)</small>
                                            <small>Pamela B. Balajadia (Dental Aide) </small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>Treatment Procedures</small>
                                        </td>
                                        <td>
                                            <small>3.17 Periodental Treatment, Oral Prophylaxis, etc.</small>
                                        </td>
                                        <td>
                                            <small>Php 150.00</small>
                                        </td>
                                        <td>
                                            <small>20 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dental health services / Cashier</small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                             <small>4.0 Post Treatment.</small>
                                             <small>4.1 Fill up the logbook before leaving the dental clinic.</small>
                                        </td>
                                        <td>
                                            <small>4.2 Chairside instructions on post treatment procedures.</small>
                                            <small>4.3 Prescribe medicines according to condition.</small>
                                            <small>4.4 Record final diagnosis and treatment done.</small>
                                            <small>4.5 Record medicines issued in the logbook.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>3 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dr Godwin A. Olivas (Dentist)</small>
                                            <small>Pamela B. Balajadia (Dental Aide) </small>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <small>5.0 Enrollment Procedures.</small>
                                             <small>5.1 Fill up to IDHR & clearance slip .</small>
                                        </td>
                                        <td>
                                            <div>
                                                <small>5.2 Checkup / assessment of incoming freshmen.</small>
                                            </div>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>2 mins</small>    
                                        </td>
                                        <td>
                                            <small>Dr Godwin A. Olivas (Dentist)</small>
                                            <small>Pamela B. Balajadia (Dental Aide) </small>
                                        </td>
                                    </tr>

                                    <!-- <tr>
                                        <td>
                                            <small>3. Referred back to Nurse in Charge</small>
                                        </td>
                                        <td>
                                            <div>
                                                <small>3.1.1 Carry out doctor's order and issuance of available medicines.</small>
                                            </div>
                                            <div>
                                                <small>3.1.2 Prepare for transfer to Hospital of Choice.</small>
                                            </div>
                                            <div>
                                                <small>3.2.1 Updated medical records and medicine consumption log book.</small>
                                            </div>
                                            <div>
                                                <small>3.2.2 Endorsed patient case to Nurse in charge at Emergency Room.</small>
                                            </div>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>5 mins</small>    
                                        </td>
                                        <td>
                                            <small>Physician on Duty</small>
                                        </td>
                                    </tr> -->

                                    <tr>
                                        <td>
                                            <small>4. Patient to discharge</small>
                                        </td>
                                        <td>
                                            <small>4.1 Adviced.</small>
                                        </td>
                                        <td>
                                            <small>None</small>
                                        </td>
                                        <td>
                                            <small>2 mins</small>    
                                        </td>
                                        <td>
                                            <small>Nurse in Charge</small>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                    </div>

                    
                </div>
                   
</div>         
</div>
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Library Office"</h2>
<div class="row">
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

                <div class="row mt-5">
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
</div>         
</div>
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Admission Office"</h2>
<div class="row">
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
</div>
</section>

<!-- <section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Guidance Office"</h2>
<div class="row">
<div class="item col-lg-4 col-md-6 col-12">
</div>           
</div>         
</div>
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"OJT and Placement"</h2>
<div class="row">
<div class="item col-lg-4 col-md-6 col-12">
</div>           
</div>         
</div>
</section>

<section id="about" class="about section">
<div class="container">
<h2 class="title text-center">"Scholarship and Finance Assistance"</h2>
<div class="row">
<div class="item col-lg-4 col-md-6 col-12">
</div>           
</div>         
</div>
</section> -->

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