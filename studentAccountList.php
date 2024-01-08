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
    
<header id="" class="">                          
<nav id="main-nav" class="main-nav navbar navbar-expand-md">
<div class="container-fluid">
<div><a href="#"><img src="urslogo6.png"></a></div>
<a class="navbar-brand logo " href="#promo">
<span class="logo-title ml-3">Students Account List</span>
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
<li class="list-inline-item facebook-like">
</div>
</section>



<section id="docs" class="about section">
<div class="container">
<div class="docs-inner"> 
    
            <a class="btn btn-primary" href="studentAccountRequest.php">Back</a>
            <h2 class="title text-center mt-3">List of Student Accounts</h2> 

            <?php 
                $result = $conn->query("SELECT * FROM users WHERE status='Active' ORDER BY user_id DESC");   
            ?>

            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col" class="d-none">User Id</th>
                <th scope="col">Username</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data = $result->fetch_assoc()){ ?>
                <tr>
                <td class="d-none"><?php echo $data['user_id'];?></td>
                <td><?php echo $data['user_name'];?></td>
                <td><?php echo $data['f_name'];?></td>
                <td><?php echo $data['m_name'];?></td>
                <td><?php echo $data['l_name'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['status'];?></td>
                <td>
                    <a href="<?php echo $data['image_dir'];?>"><?php echo $data['image_dir'];?></a>
                </td>
                <td>

                    <!-- <form action="" method="POST">
                        <input type="text" class="d-none" name="user_id" value="<?php echo $data['user_id'];?>">
                        <input type="text" class="d-none" name="email" class="form-control" value="<?php echo $data['email'];?>">
                        <input type="text" name="username" id="username" class="form-control d-none" value="<?php echo $data['user_name'];?>">
                        <input type="text" name="first_name" id="first_name" class="form-control d-none" value="<?php echo $data['f_name'];?>">
                        <input type="text" name="middle_name" id="middle_name" class="form-control d-none" value="<?php echo $data['m_name'];?>">
                        <input type="text" name="last_name" id="last_name" class="form-control d-none" value="<?php echo $data['l_name'];?>">
                        <input type="submit" name="editStatusBtn" value="Edit" class="form-control btn-dark">
                    </form> -->
                    
                    <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#editAcc<?php echo $data['user_id'];?>">Edit</button>

                    
                    <div class="modal fade" id="editAcc<?php echo $data['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Student Request</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" >
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group d-none">
                                            <label for="">User Id</label>
                                            <input type="text" name="user_id" id="user_id" class="form-control" readonly="true" value="<?php echo $data['user_id']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" name="username" id="username" class="form-control" readonly="true" value="<?php echo $data['user_name']?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" readonly="true" value="<?php echo $data['f_name']?>">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Middle Name</label>
                                            <input type="text" name="middle_name" id="middle_name" class="form-control" readonly="true" value="<?php echo $data['m_name']?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" readonly="true" value="<?php echo $data['l_name']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" readonly="true" value="<?php echo $data['email']?>" >
                                </div>

                                <!-- <div class="form-group">
                                    <label for="">Select Status</label>
                                    <select name="edit_status" id="status" class="form-control" required >
                                        <option value="" ></option>
                                        <option value="Confirmed">Confirm</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div> -->

                                <input type="submit" name="editStatusBtn" value="Edit" class="mt-3 form-control btn-primary">

                            </form>

                            
                        </div>
                        </div>
                    </div>  
                    </div>
                </td>
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

<section id="contact" class="about section">
<div class="container">
<div class="contact-inner">
<h2 class="title  text-center"></h2>
<p class="intro  text-center"></p>
<div class="author-message">                      
<div class="profile">
<img class="img-fluid" src="" alt="" />
</div>
<div class="">
<h3 class="sub-title"></h3>
<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSeoL9c00mU2mTtdiGbaP-A9H5t1f_QgWrIDCM_hTWa_kQ3qnw/viewform?usp=share_link" target="_blank"></a></p>
<p><strong></strong></p>
</div>                   
</div>
<div class="info text-center">
<h4 class="sub-title"></h4>
<ul class="social-icons list-inline">
            
</ul>
</div>
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

<script>
    $(document).ready(function(){
        $('.editBtn').on('click', function(){
            console.log("Clikced")

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#user_id').val(data[0]);
            $('#username').val(data[1]);
            $('#first_name').val(data[2]);
            $('#middle_name').val(data[3]);
            
            $('#last_name').val(data[4]);
            $('#email').val(data[5]);

            $("#status option:selected").text(data[6]);
            $("#status option:selected").val(data[6]);
        });
    });
</script>    
</body>
</html> 

