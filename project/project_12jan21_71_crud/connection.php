<?php
	ini_set("display_errors", 0);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "pwad_php_crud";

	$conn = mysqli_connect($host, $user, $pass, $database) or die("Something Wrong. Please contact with your Server Administrator");

	if($conn){
		echo "success";
	}
	else{
		echo "problem";
	}
?>