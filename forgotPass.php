<?php 

session_start();

require 'db_conn.php';

	// unset($_SESSION['user_id']);

    if(isset($_GET['email']) && isset($_GET['token'])){
        $email = $_GET['email'];
        $token = $_GET['token'];

        $stmt = $conn->prepare("SELECT user_id FROM users WHERE email=? AND token=? AND token<>'' AND token_expire>NOW()");
        $stmt->bind_param("ss", $email,$token);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows>0){
            if(isset($_POST['submit'])){

                $newpass = $_POST['newpass'];
                $cnewpass = $_POST['cnewpass'];

                if($newpass == $cnewpass){
                    $stmt_u = $conn->prepare("UPDATE users SET token='', password=? WHERE email=?");
                    $stmt_u->bind_param("ss", $newpass, $email);
                    $stmt_u->execute();

                    
                    echo '<script>alert("Password Changed Succesfully")</script>';
                    // $msg = "Password Changed Succesfully";
                    
                    // header("Location: login.php");
                    
                    echo '<script>window.location.href = "studentlogin.php"</script>';
                    
                }

                else{
                    echo '<script>alert("Password Did not match!")</script>';
                    // $msg = "Password Did not match";
                }
            }

        }

    }
            
    else{
        header("Location: index.php");
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
                <input name="newpass" type="text" value="" class="input form-control" id="email" placeholder="New Password" required/>
                </div>

                <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
                <input name="cnewpass" type="text" value="" class="input form-control" id="email" placeholder="Confirm New Password" required/>
                </div>
           </div>
          
          
          <div class="col-12">
            
            <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
            <a href="studentindex.php" class="btn btn-primary btn-block">Back</a>
             
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>