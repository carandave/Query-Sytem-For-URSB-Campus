<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: studentindex.php?error=Student Number is required");
	    exit();
	}else if(empty($pass)){
        header("Location: studentindex.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND status='Active'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['user_id'] = $row['user_id'];
            	$_SESSION['name'] = $row['name'];
            	header("Location: studentHOMEPAGE.php");
		        exit();
            }else{
				header("Location: studentindex.php?error=Incorect Student Number or Password");
		        exit();
			}
		}
		else{
			header("Location: studentindex.php?error=Incorect Student Number or Password or Your account hasn't verified yet");
	        exit();
		}
	}
	
}else{
	header("Location: studentindex.php");
	exit();
}
?>