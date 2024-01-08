<?php 

session_start();

	unset($_SESSION['user_id']);


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
  <div class="row d-flex justify-content-center align-items-center m-0" style="height: 100vh;">
    <div class="login_oueter">
      <div class="col-md-12 logo_outer">
      </div>
      <form action="studentlogin.php" method="post" id="login" autocomplete="off" class="bg-light border p-3">
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <div class="form-row">
          <h4 class="title my-3">LOGIN</h4>
           <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input name="uname" type="text" value="" class="input form-control" id="uname" placeholder="Student No." aria-label="uname" aria-describedby="basic-addon1" />
                </div>
          </div>
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
            </div>
          </div>
          <a class="mb-3" href="forgot.php">Forgot Password?</a>
          <div class="col-12">
            <a class="btn btn-primary" href="index.php">BACK</a>
            <button class="btn btn-primary" type="submit" name="insert">LOGIN</button>
             <br>
             <br>
             <label> <a href="studentregister.php">No account yet?</a></label>
             <br>
	         <label> <a href="studentADMISSIONguests.php">Continue using Guest account?</a></label>
	         <br>
	         <label> <a href="adminlogin.php">Login as a Admin</a></label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>