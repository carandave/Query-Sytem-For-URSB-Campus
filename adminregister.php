<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Web-Based Query System URSB</title>
<link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css">
<link rel="shortcut icon" href="urslogo2.png">
</head>
<body>

<?php
if(!empty($_POST["send"])) {
    $filenameee =  $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name']; 
    $eml = $_POST['eml'];
    $co = $_POST['co'];
    $pass = $_POST['pass'];

    include 'db_conn.php';
 
     if (empty($eml) || empty($co) || empty($pass) || empty($file)) {
        $sql = "INSERT INTO adminsignup(email, campus_office, password, faculty_id) VALUES('$eml', '$co', '$pass', '')";
        $res = mysqli_query($conn, $sql); 
     }
    
    $message =
    "\r\n Email Address: ". $eml . 
    "\r\n Campus Office: " . $co . 
    "\r\n Password: " . $pass; 
    
    $subject ="WEB-BASED QUERY SYSTEM";
    $fromname ="ADMIN REGISTRATION UPDATES";
    $fromemail = $eml;  
    $mailto = 'kiannn005@gmail.com';
    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));
    $separator = md5(time());
    $eol = "\r\n";
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
  
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    if (mail($mailto, $subject, $body, $headers)) {
        $message = "Your Registration Details is submitted successfully.";
    }
}
    ?>
        <form action="" method="post" enctype="multipart/form-data">
     	<h2>Web-Based Query System for URSB</h2>
     	<label>Email Address:</label>
     	<input type="email" name="eml" placeholder="Email Address"><br>
		<label>Campus Office:</label>
     	<input type="text" name="co" placeholder="Student Number"><br>
     	<label>Password:</label>
     	<input type="password" name="pass" placeholder="Password"><br>
		<div id="inputImage">
        <label for="image">Faculty ID Picture:</label>
		<input type="file" name="file">
        </div>
		<i>*Sign Up process may last up to 24 hours verifying your account, Please wait patiently and always check your email account.</i>
		<br>
		<br>
		<input type="submit" name="send" value="Submit">
        <?php if (! empty($message)) {?>
        <div class='success'>
        <strong><?php echo $message; ?>	</strong>
        </div>
        <?php } ?>
        </form>
	    <label> <a href="adminlogin.php">Back to Login Page</a></label>
</body>
</html>