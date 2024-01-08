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
<!-- <li class="nav-item"><a class="nav-link" href="studentAccountRequest.php">STUDENT REQUEST ACCOUNT</a></li> -->
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
<a class="btn btn-cta-primary" href="adminCLINIC.php">Back to Home Page</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="docs" class="docs section" style="z-index: -100">
        <div class="container">
            <div class="mb-5 ">
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

