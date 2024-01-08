<?php 

require 'db_conn.php';

require("Phpmailer/PHPMailer.php");
require("Phpmailer/SMTP.php");

if(isset($_POST['editStatusBtn'])){
    $checked_array = $_POST['prodid'];
    // $userName = $_POST['username'];
    // $firstName = $_POST['first_name'];
    // $middleName = $_POST['middle_name'];
    // $lastName = $_POST['last_name'];
    // $email = $_POST['email'];

    // print_r($userId);

    foreach($_POST['prodid'] as $key=> $value){
        if(in_array($_POST['prodid'][$key], $checked_array)){
          
           $userId = $_POST['prodid'][$key];

           $sqld = "SELECT * FROM users WHERE user_id='$userId'";
           $resultd = $conn->query($sqld);

           if($resultd->num_rows > 0){
                while($rowsd = $resultd->fetch_assoc()){
                    
                    $email= $rowsd['email'];
                    $userName = $rowsd['user_name'];
                    $firstName = $rowsd['f_name'];
                    $middleName = $rowsd['m_name'];
                    $lastName = $rowsd['l_name'];

                    $sqlu = "UPDATE users SET status='Active' WHERE user_id='$userId'";
                    $resultu = $conn->query($sqlu);

                    

                    $mail = new PHPMailer\PHPMailer\PHPMailer();


                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;
                    $mail->IsSMTP();
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = "tls";

                    $mail->Username = "ursbregistrar@gmail.com";
                    $mail->Password = "nnqfkfqmhryrwfwa";

                    $mail->AddAddress($email);
                    $mail->setFrom('ursbregistrar@gmail.com', 'URS Registrar Binangonan Notification');
                    $mail->Subject = 'Account Status';
                    $mail->isHTML(true);

                    $mail->Body = "<h3>Student Details Account</h3>
                                    <p>Student Number: $userName</p>
                                    <p>First Name: $firstName</p>
                                    <p>Last Name: $middleName</p>
                                    <p>Last Name: $lastName</p>

                                    <h4>Your Account has been verified you can now login to your account</h4>
                                    <p>Thank You!</p>
                                    <h3>URS Registrar Binangonan</h3>";

                    if($mail->send()){
                        
                        
                    }

                    else{
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' .$mail->ErrorInfo;
                    }

                    echo '<script>alert("Successfully Updated the Request Acccount!")</script>';
                    echo '<script>window.location.href="studentAccountRequest.php"</script>';


                }
           }
    
        //   $sql = "UPDATE users SET status='Active' WHERE user_id='$userId'";
        } 
        
        // if ($db->query($sql) === TRUE) {
        //     echo '<script>alert("Successfully Updated the Request Acccount!")</script>';
        //     echo '<script>window.location.href="studentAccountRequest.php"</script>';
        // } 
    
        // else {
        //   echo '<script>alert("Error!")</script>';
        // }
        
      }
    

    // $sql = "UPDATE users SET status='Active' WHERE user_id='$userId'";
    // $result = mysqli_query($conn, $sql);

    // require("Phpmailer/PHPMailer.php");
    // require("Phpmailer/SMTP.php");

    // $mail = new PHPMailer\PHPMailer\PHPMailer();


    // $mail->Host = 'smtp.gmail.com';

    // $mail->Port = 587;
    // $mail->IsSMTP();
    // $mail->SMTPAuth = true;
    // $mail->SMTPSecure = "tls";

    // $mail->Username = "ursbregistrar@gmail.com";
    // $mail->Password = "nnqfkfqmhryrwfwa";

    // $mail->AddAddress($email);
    // $mail->setFrom('ursbregistrar@gmail.com', 'URS Registrar Binangonan Notification');
    // $mail->Subject = 'Account Status';
    // $mail->isHTML(true);

    // $mail->Body = "<h3>Student Details Account</h3>
    //                 <p>Student Number: $userName</p>
    //                 <p>First Name: $firstName</p>
    //                 <p>Last Name: $middleName</p>
    //                 <p>Last Name: $lastName</p>

    //                 <h4>Your Account has been verified you can now login to your account</h4>
    //                 <p>Thank You!</p>
    //                 <h3>URS Registrar Binangonan</h3>";

    // if($mail->send()){
        
        
    // }

    // else{
    //     echo 'Message could not be sent.';
    //     echo 'Mailer Error: ' .$mail->ErrorInfo;
    // }

  

    // echo '<script>alert("Successfully Updated the Request Acccount!")</script>';
    // echo '<script>window.location.href="studentAccountRequest.php"</script>';

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
<span class="logo-title ml-3">Students Request Accounts</span>
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
    
            <a class="btn btn-primary" href="adminREGISTRAR.php">Back</a>
            <h2 class="title text-center mt-2">List of Student Request Accounts</h2> 

            <?php 
                $result = $conn->query("SELECT * FROM users WHERE status='Inactive' ORDER BY user_id DESC");   
            ?>

            <a href="studentAccountList.php" class="btn btn-info mb-3">View All Student List</a>
            <form action="" method="POST">
            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                <th scope="col" class="">User Id</th>
                <th scope="col">Student Number</th>
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
                <td class=""><?php echo $data['user_id'];?></td>
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
                    <input type="checkbox" name="prodid[]" value="<?php echo $data['user_id'];?>" >

                    <!-- <form action="" method="POST">
                        <input type="text" class="d-none" name="user_id" value="<?php echo $data['user_id'];?>">
                        <input type="text" class="d-none" name="email" class="form-control" value="<?php echo $data['email'];?>">
                        <input type="text" name="username" id="username" class="form-control d-none" value="<?php echo $data['user_name'];?>">
                        <input type="text" name="first_name" id="first_name" class="form-control d-none" value="<?php echo $data['f_name'];?>">
                        <input type="text" name="middle_name" id="middle_name" class="form-control d-none" value="<?php echo $data['m_name'];?>">
                        <input type="text" name="last_name" id="last_name" class="form-control d-none" value="<?php echo $data['l_name'];?>">
                        <input type="submit" name="editStatusBtn" value="Confirmed" class="form-control btn-primary">
                    </form> -->
                    
                    <!-- <button type="button" class="btn btn-primary editBtn" data-toggle="modal" data-target="#exampleModal">Confirm</button>

                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input type="text" name="user_id" id="user_id" class="form-control" readonly="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Student Number</label>
                                            <input type="text" name="username" id="username" class="form-control" readonly="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" readonly="true">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Middle Name</label>
                                            <input type="text" name="middle_name" id="middle_name" class="form-control" readonly="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" readonly="true">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" readonly="true">
                                </div>

                                <div class="form-group">
                                    <label for="">Select Status</label>
                                    <select name="edit_status" id="status" class="form-control" required >
                                        <option value="" ></option>
                                        <option value="Confirmed">Confirm</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>

                                <input type="submit" name="editStatusBtn" value="Submit" class="form-control btn-primary">

                            </form>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>  
                    </div> -->
                </td>
                </tr>

                <?php } ?>
                
            </tbody>
            </table>
            <input type="submit" name="editStatusBtn" value="Submit" class="form-control btn-primary">
            </form>
         
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

