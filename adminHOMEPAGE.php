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
<link rel="stylesheet" href="assets/css/popup3.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="assets/js/popup.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script> 
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
<span class="logo-title">Home</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
<li class="nav-item sr-only"><a class="nav-link scrollto" href="#promo">Home</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="#docs">ADD CAMPUS DETAILS</a></li>                   -->
<!-- <li class="nav-item"><a class="nav-link" href="adminFAQS.php">ADD FAQS</a></li> -->
<li class="nav-item"><a class="nav-link" href="adminHOMEPAGE.php">HOME</a></li>
<li class="nav-item"><a class="nav-link" onclick="togglePopup()">OFFICES</a></li>
<!-- <li class="nav-item"><a class="nav-link" href="adminchat.php?adminId=1008">LIVE CHAT</a></li>    -->
<li class="nav-item"><a class="nav-link" href="chat_registrar.php">CHAT BOTS</a></li>
<li class="nav-item"><a class="nav-link" href="chatReport.php">REPORTS</a></li>
<li class="nav-item"><a class="nav-link" href="adminSettings.php">SETTINGS</a></li>
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



<section id="docs" class="docs section">
<div class="container">
<div class="docs-inner"> 
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Campus Office
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Campus Office</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="adminCampusOffice_add.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name of Office</label>
                            <input type="text" name="office-title" id="office-title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Office Description</label>
                            <textarea name="office-description" id="office-description" class="form-control" required cols="3" rows="3">

                            </textarea>
                            <!-- <input type="text" name="office-description" id="office-description" class="form-control" required> -->
                        </div>

                        <div class="form-group">
                            <label for="">Office Funtions</label>
                            <textarea name="office-functions" id="office-functions" class="form-control" required cols="3" rows="3">

                            </textarea>
                            <!-- <input type="text" name="office-functions" id="office-functions" class="form-control" required> -->
                        </div>

                        <div class="form-group">
                            <label for="">Head of Office</label>
                            <input type="text" name="office-head" id="office-head" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="office-location" id="office-location" class="form-control" required>
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

            <h2 class="title text-center mt-3">List of Campus Offices</h2> 

            <?php 
                $result = $conn->query("SELECT * FROM tbl_offices");   
            ?>

            
                <?php while($data = $result->fetch_assoc()){ ?>
                    <div class="block mb-3 mt-1">
                        <div class="mt-5">

                        <h3 class="sub-title text-center mt-3"><?php echo $data['title'];?></h3>
                        <p><?php echo $data['description'];?></p>
                        <p><strong>Functions: </strong><?php echo $data['functions'];?></p>
                        <ul class="list-unstyled">
                            <li><strong>Head: </strong><?php echo $data['head'];?></li><br>
                            <li><strong>Location: </strong><?php echo $data['location'];?></li>
                        </ul>
                        <div class="code-block mb-3">
                            <img class="img-fluid" src="<?php echo $data['image_dir']?> " style="border-radius: 20px;">
                        </div>

                        </div>
                        
                    </div>

                <?php } ?>
            
            
            
<!-- <div class="block">
<h2 class="title text-center">List of Campus Offices</h2> 
<h3 class="sub-title text-center">REGISTRAR OFFICE</h3>
<p>Registrar Office is one of the main and most important offices in the University because this office handles all documents and information of all students from their first year up to graduation of the students.</p>
<p>- Submissions of Documents.</p>
<p>- Adding of Subjects.</p>
<p>- Dropping of Subjects.</p>
<p>- Requesting of Documents.</p>
<p>- Student Records.</p>
<ul class="list-unstyled">
<li><strong>Registrar Head:</strong>Ms. Marlene S. Julian.</li><br>
<li><strong>Location:</strong>Middle part of the Campus beside Cashier and CBA Office.</li>
</ul>
<div class="code-block">
<img class="img-fluid" src="assets/images/registrarpic.jpg">
</div>
</div>
            
<div class="block">
<h3 class="sub-title text-center">HEALTH OFFICE</h3>
<p>Health Office is one of the special office that also needed by Students and Professors. If they not feeling well or have mild symptoms that can turn to more serious illness.</p>
<p>- Giving First Aid to Students.</p>         
<p>- Providing Information regarding Health Topics.</p>
<p>- Having Webinars and Seminars for the University Cleanliness to avoid pollution and illness.</p>
<ul class="list-unstyled">
<li><strong>Health Office Head: </strong>Ms. Diosa Salvador.</li><br>
<li><strong>Location: </strong>Right Side of the Campus beside Sports Development Office.</li>
</ul>     
<div class="code-block">
<img class="img-fluid" src="assets/images/clinicpic.jpg">
</div>
</div>
            
<div class="block">
<h3 class="sub-title text-center">LIBRARY</h3>
<p>Library is also one of the important office in the University because in the library all related course and subjects books, Completed Capstone / Thesis are stored.</p>
<p>- Students research purposes.</p>         
<p>- Students references.</p>
<p>- Do activity and assignments using vacant hours.</p>
<ul class="list-unstyled">
<li><strong>Librarian: </strong>Ms. Vivian A. Lirio.</li><br>
<li><strong>Location: </strong>3rd floor right side building of the University.</li>
</ul>     
<div class="code-block">
<img class="img-fluid" src="assets/images/librarypic.jpg">
</div>
</div>

<div class="block">
<h3 class="title text-center">Office of the Student Development Services</h3> 
<div class="code-block">
<img class="img-fluid" src="assets/images/osdspic.jpg">
</div>
<br>
<h3 class="sub-title text-center">ADMISSION OFFICE</h3>
<p>Admission Office is the one who handles the important announcements of Student application and Qualified Students about the upcoming school year and also handle the Student ID production in the Campus.</p>
<p>- Announcements about Application and Qualified Students in all Courses.</p>         
<p>- Student ID Production.</p>
<ul class="list-unstyled">
<li><strong>Admission Officer: </strong>Mr. Aristotle C. Mayorca.</li><br>
<li><strong>Location: </strong>OSDS Building left side of the Campus near the main gate.</li>
</ul>     
</div>

<div class="block">
<h3 class="sub-title text-center">GUIDANCE OFFICE</h3>
<p>Guidance Office help Students on giving a counseling to any struggles and problems that Students can encounter either in school, family and financial problems.</p>
<p>- Counseling for Students.</p>         
<p>- Conducting Webinars and Seminars about good environment.</p>
<ul class="list-unstyled">
<li><strong>Guidance Counselor: </strong>Ms. Bernadette Francisco.</li><br>
<li><strong>Location: </strong>2nd floor OSDS Building left side of the Campus near the main gate.</li>
</ul>     
</div>

<div class="block">
<h3 class="sub-title text-center">OJT and Placement</h3>
<p>OJT and Placement gives opportunity to Students to finish their immersion inside the University.</p>
<p>- Implementing on the job training for Students of URS Binangonan.</p>
<p>- Students Completing OJT needed hours.</p>
<ul class="list-unstyled">
<li><strong>OJT and Placement Officer: </strong>Ms. Singsing Ulat.</li><br>
<li><strong>Location: </strong>2nd floor OSDS Building left side of the Campus near the main gate.</li>
</ul>     
</div>

<div class="block">
<h3 class="sub-title text-center">Scholarship and Finance Assistance</h3>
<p>Scholarship and Finance Assistance gives opportunity to all Students of the University of Rizal System Binangonan to get a Scholarship and financial support from government that can help them in their education.</p>
<p>- Provide opportunity of having scholarship for Students.</p>         
<p>- Help Students to have Financial Support in their College Education.</p>
<ul class="list-unstyled">
<li><strong>Scholarship and Finance Assistance Officer: </strong>Ms. Baby Eunice M. Cabaltera.</li><br>
<li><strong>Location: </strong>2nd floor OSDS Building left side of the Campus near the main gate.</li>
</ul>     
</div>         -->
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
<h3>List of University Offices</h3>
<br>
<a class="btn btn-cta-primary" href="">REGISTRAR OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="">HEALTH OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="">LIBRARY OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="">ADMISSION OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="">GUIDANCE OFFICE</a>
<br>
<br>
<a class="btn btn-cta-primary" href="">OJT AND PLACEMENT</a>
<br>
<br>
<a class="btn btn-cta-primary" href="">SCHOLARSHIP AND FINANCE ASSISTANCE</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>
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

