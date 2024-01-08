<?php

// $sname= "localhost";
// $unmae= "u790540098_tdb";
// $password = "Wbqsursb0";

// $db_name = "u790540098_test_db";

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "wbqs";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>