<?php
require 'db_conn.php';

session_start();

$adminId =  $_SESSION['admin_id'];

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
<span class="logo-title">Admin Settings</span>
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
<a class="btn btn-cta-primary" href="adminHOMEPAGE.php">Back to Home Page</a>
</div>
<li class="list-inline-item facebook-like">
</div>
</section>

<section id="docs" class="about section">
<div class="container">
<div class="docs-inner"> 
    
            <h2 class="title text-center mt-3">Edit Website</h2> 

            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addWeb">Add</button>

            <div class="modal fade" id="addWeb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Website Info</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="adminWebsite_add.php" method="POST" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" name="title_add" id="username" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Content</label>
                                        <textarea name="content_add" id="content_add" cols="10" rows="10" value="" class="form-control" required>
                                            
                                        </textarea>
                                        <!-- <input type="text" name="first_name" id="first_name" class="form-control" readonly="true" value="<?php echo $data['content']?>"> -->
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="addStatusBtn" value="Edit" class="mt-3 form-control btn-primary">
                        
                        </form>
                    </div>
                </div>
            </div>
            </div>


            <?php 
            
            $sql = "SELECT * FROM tbl_university";
            $result = $conn->query($sql);
            
            ?>

            
            

            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col" class="d-none">Info Id</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($result->num_rows > 0){?>
                    <?php while($data = $result->fetch_assoc()){?>
                <tr>
                <td class="d-none"><?php echo $data['info_Id'];?></td>
                <td><?php echo $data['title'];?></td>
                <td><?php echo $data['content'];?></td>
                <td>

                    <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#editAcc<?php echo $data['info_Id'];?>">Edit</button>

                    
                    <div class="modal fade" id="editAcc<?php echo $data['info_Id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Student Request</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="adminWebsite_edit.php" method="POST" >
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group ">
                                            <label for="">Info Id</label>
                                            <input type="text" name="info_Id" id="user_id" class="d-none form-control" readonly="true" value="<?php echo $data['info_Id']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" id="username" class="form-control" value="<?php echo $data['title']?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Content</label>
                                            <textarea name="content" id="content" cols="10" rows="10" value="<?php echo $data['content']?>" class="form-control">
                                                <?php echo $data['content']?>
                                            </textarea>
                                            <!-- <input type="text" name="first_name" id="first_name" class="form-control" readonly="true" value="<?php echo $data['content']?>"> -->
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="editStatusBtn" value="Edit" class="mt-3 form-control btn-primary">

                            </form>

                            
                        </div>
                        </div>
                    </div>  
                    </div>
                </td>
                </tr>

                    <?php } ?>
                <?php } ?>
            </tbody>
            </table>

            
                
         
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

