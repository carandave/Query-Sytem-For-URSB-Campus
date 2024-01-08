<?php

include 'db_conn.php';
$con = mysqli_connect("Localhost", "root", "", "wbqs");

if (isset($_POST['insert'])) {

    $email =  $_POST['email'];
    $username = $_POST['studno'];
    $studf =  $_POST['studf'];
    $studm =  $_POST['studm'];
    $studl =  $_POST['studl'];
    $pass =   $_POST['pass'];
    $cpass =   $_POST['cpass'];
    $status =   "Inactive";

    $errors = array();
      
    $e = "SELECT email FROM users WHERE email='$email'";
    $ee = mysqli_query($con,$e);
    
    $s = "SELECT user_name FROM users WHERE user_name='$username'";
    $ss = mysqli_query($con,$s);
    
  if (empty($email)){
      $errors['e'] = "Email Address Required !";
  } else if(mysqli_num_rows($ee) > 0) {
      $errors['e'] = "Email Address Already Exist !";
  }
  if (empty($username)){
      $errors['s'] = "Student No. Required !";
  } else if(mysqli_num_rows($ss) > 0) {
      $errors['s'] = "Student No. Already Exist !";
  }
  if (empty($studf)){
      $errors['f'] = "Student First Name Required !";
  } 
  if (empty($studm)){
      $errors['m'] = "Student Middle Name Required !";
  }
  if (empty($studl)){
      $errors['l'] = "Student Last Name Required !";
  } 
  if (empty($pass)){
      $errors['p'] = "Password Required !";
  }
  if (empty($cpass)){
      $errors['o'] = "Confirm Password Required !";
  }


    if($pass == $cpass){

      if (isset($_POST['insert'])) {
        $phpFileUploadErrors = array(
          0 => 'There is no error, the file uploaded with success',
          1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
          2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML Form',
          3 => 'The uploaded file was only partially uploaded',
          4 => 'No file was uploaded',
          6 => 'Missing a temporary folder',
          7 => 'Failed to write file to disk',
          8 => 'A PHP extension stopped the file upload.',
        );
        
        if(isset($_FILES['userfile'])){
        
          $file_array = reArrayFiles($_FILES['userfile']);
        
          for($i = 0; $i<count($file_array); $i++){
              if($file_array[$i]['error']){
                  ?> <div class="alert alert-danger">
                  <?php echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
                  ?> </div> <?php
              }
        
              else{
                  $extensions = array('jpg', 'png', 'gif', 'jpeg', 'pdf');
        
                  $file_ext = explode('.', $file_array[$i]['name']);
        
                  $name = $file_ext[0];
                  $name = preg_replace("!-!", " ", $name);
                  $name = ucwords($name);
                  
        
                  $file_ext = end($file_ext);
        
                  if(!in_array($file_ext, $extensions)){
                      ?> <div class="alert alert-danger">
                      <?php echo "{$file_array[$i]['name']} - Invalid File Extension!";
                      ?> </div> <?php
                  }
        
                  else {
        
                      $img_dir = 'web/'.$file_array[$i]['name'];
        
                      move_uploaded_file($file_array[$i]['tmp_name'], $img_dir);
        
                      $sql = "INSERT INTO users (email, user_name, password, f_name, m_name, l_name, status, name, image_dir) VALUES('$email', '$username', '$pass', '$studf', '$studm', '$studl','$status','$name','$img_dir')";
                      mysqli_query($conn, $sql);
                      // $mysqli->query($sql) or die ($mysqli->error);
        
                      
        
                      echo '<script>alert("We received your registration for accessing the web-based query system for university of rizal system binangonan campus. Kindly Wait for your account confirmation in 24 up to 48 hours, An email will be sent to you once the account is validated Thank You.")</script>';
                      echo '<script>window.location.href = "studentregister.php"</script>';
                  }
        
        
              }
        
          }
        }
        }

    }

    else{
      echo "<script>alert('The Password and Confirm Password is not match.!')</script>";
    }

}


function reArrayFiles(&$file_post){
  $file_ary = array();
  $file_count = count($file_post['name']);
  $file_keys = array_keys($file_post);

  for($i = 0; $i<$file_count; $i++){
      foreach($file_keys as $key){
          $file_ary[$i][$key] = $file_post[$key][$i];
      }
  }

  return $file_ary;
}


function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Web-Based Query System URSB</title>
<link rel="shortcut icon" href="urslogo2.png">
<script src="assets/js/passicon.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

<style>
 body {
	background: #17baef;
}
.login_oueter {
    width: 650px;
    max-width: 100%;
}
.logo_outer{
    text-align: center;
}
.logo_outer img{
    width:120px;
    margin-bottom: 40px;
}
</style>

</head>
<body>

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center m-0 p-5" style="height: 100vh;">
    <div class="login_oueter">
      <!-- <div class="col-md-12 logo_outer">

      </div> -->
      <form action="" method="POST" enctype="multipart/form-data" id="login" class="bg-light border p-3">
        <h4 class="title my-3">REGISTRATION</h4>
        <div class="form-row">
          
          <div class="col-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
              </div>
              
              <input name="email" type="text" value="" class="input form-control" id="email" placeholder="Email Address" />
                <p class="text-danger"><?php if(isset($errors['e'])) echo $errors['e']; ?></p>
            </div>
          </div>
           <div class="col-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-hashtag"></i></span>
              </div>
              <input name="studno" type="text" value="" class="input form-control" id="studno" placeholder="Student No." />
                <p class="text-danger"><?php if(isset($errors['s'])) echo $errors['s']; ?></p>
                </div>
          </div>
               <div class="col-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="studf" type="text" value="" class="input form-control" id="studf" placeholder="Student First Name" />
                  <p class="text-danger"><?php if(isset($errors['f'])) echo $errors['f']; ?></p>
                </div>
          </div>
               <div class="col-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="studm" type="text" value="" class="input form-control" id="studm" placeholder="Student Middle Name" />
                <p class="text-danger"><?php if(isset($errors['m'])) echo $errors['m']; ?></p>
                </div>
          </div>
               <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="studl" type="text" value="" class="input form-control" id="studl" placeholder="Student Last Name" />
               <p class="text-danger"><?php if(isset($errors['l'])) echo $errors['l']; ?></p>
                </div>
          </div>
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="pass" type="password" value="" class="input form-control" id="password" placeholder="Password" />
                <p class="text-danger"><?php if(isset($errors['p'])) echo $errors['p']; ?></p>
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
            </div>
          </div>
           <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="cpass" type="password" value="" class="input form-control" id="cpassword" placeholder="Confirm Password" />
               <p class="text-danger"><?php if(isset($errors['o'])) echo $errors['o']; ?></p>
               <div class="input-group-append">
                <span class="input-group-text" onclick="cpassword_show_hide();">
                  <i class="fas fa-eye" id="show_eye1"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                </span>
                </div>

                
          </div>
           <div class="col-12">
           <label>Certificate of Registration ('jpg', 'png', 'jpeg', 'pdf'):</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-pdf"></i></span>
              </div>
              <input type="file" class="input form-control" name="userfile[]" id="userfile" value="" placeholder="Confirm Password" multiple="" />
              
                </div>
          </div>
         
          <div class="col-12">
              <i>*Sign Up process may last up to 24 hours verifying your account, Please wait patiently and always check your email account.</i>
              <br>
            <a class="btn btn-primary" href="studentindex.php">BACK</a>
            <button class="btn btn-primary" type="submit" name="insert">SUBMIT</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
                  function cpassword_show_hide() {
                  console.log("CPassword1");
                  var x = document.getElementById("cpassword");
                  var show_eye = document.getElementById("show_eye1");
                  var hide_eye = document.getElementById("hide_eye1");
                  hide_eye.classList.remove("d-none");
                  if (x.type === "password") {
                    x.type = "text";
                    show_eye.style.display = "none";
                    hide_eye.style.display = "block";
                  } else {
                    x.type = "password";
                    show_eye.style.display = "block";
                    hide_eye.style.display = "none";
                  }
                }
                </script>
</body>
</html>