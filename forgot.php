<?php 

session_start();

require 'db_conn.php';

	unset($_SESSION['user_id']);

    // For Change Password
    if(isset($_POST['forgot'])){

        $email = $_POST['email'];

        $stmt_p = $conn->prepare("SELECT user_id FROM users WHERE email=?");
        $stmt_p->bind_param("s", $email);
        $stmt_p->execute();
        $res = $stmt_p->get_result();

        if($res->num_rows>0){

            $token = "qwertyuiopasdfghjklzxcvbnm1234567890";
            $token = str_shuffle($token);
            $token = substr($token, 0,10);

            $stmt_i = $conn->prepare("UPDATE users SET token=?, token_expire=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email=?");
            $stmt_i->bind_param("ss", $token, $email);
            $stmt_i->execute();


            require("Phpmailer/PHPMailer.php");
            require("Phpmailer/SMTP.php");

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
            $mail->Subject = 'Reset Password';
            $mail->isHTML(true);

            $mail->Body = "<h3>Click the Link Below to reset your password.</h3>
                           <br>
                           <a href='https://webbasedquerysystemforursb.online/forgotPass.php?email=$email&token=$token'>https://webbasedquerysystemforursb.online/forgotPass.php?email=$email&token=$token</a>
                           <br>
                           <h3>Regards:</h3>
                           <h3>URS BINANGONAN REGISTRAR</h3>";

            if($mail->send()){
                

                echo '<script>alert("The email has been sent. Please Check your email")</script>';
                echo '<script>window.location.href = "forgot.php"</script>';
                
                
            }

            else{
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' .$mail->ErrorInfo;
            }

        }
        else{
            echo "NoEmail";
        }



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
</style>

</head>
<body>

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 100vh;">
    <div class="login_oueter">
      <div class="col-md-12 logo_outer">

      </div>
      <form action="" method="POST" id="login" class="bg-light border p-3">
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="form-row">
          <h4 class="title my-3 text-center">Forgot Password</h4>
           <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="email" type="email" value="" class="input form-control" id="email" placeholder="Enter your email" required/>
                </div>
          </div>
          
          
          <div class="col-12">
            
            <button class="btn btn-primary btn-block" type="submit" name="forgot">Submit</button>
            <a href="studentindex.php" class="btn btn-primary btn-block">Back</a>
             
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>