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
<link rel="stylesheet" href="assets/css/popup2.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="assets/js/popup.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<span class="logo-title"> FAQS</span>
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
                       
<div class="navbar-collapse collapse" id="navbar-collapse">
<ul id="nav-menu" class="nav navbar-nav ms-md-auto">
</ul>
</div>
</div>
</nav>
</header>

<section id="promo" class="promo section offset-header">
<div class="container text-center">
<i><p class="intro">"Nurturing Tomorrow's Noblest"</p></i>
<div class="btns">
<a class="btn btn-cta-primary" href="adminSettings.php">Back to Settings</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>



<section id="docs" class="docs section">
<div class="container">
<div class="docs-inner"> 
    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Frequently Asked Questions
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add FAQS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="adminFAQS_add.php" method="POST" enctype="multipart/form-data">
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

                        <div class="form-group">
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
                        </div>

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

            <h2 class="title text-center mt-3">List of FAQS</h2> 

            <?php 
                $result = $conn->query("SELECT * FROM tbl_faqs ORDER BY faqsId DESC");   
            ?>

            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Department</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data = $result->fetch_assoc()){ ?>
                <tr>
                <td><?php echo $data['question'];?></td>
                <td><?php echo $data['answer'];?></td>
                <td><?php echo $data['department'];?></td>
                </tr>

                <?php } ?>
                
            </tbody>
            </table>

            
                <!-- <?php while($data = $result->fetch_assoc()){ ?>
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

                <?php } ?> -->
         
</div>      
</div>
</section>

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

