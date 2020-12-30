<?php
	$pswd = "1234567890";
	if(strlen($pswd) < 10){
		echo "Password is too short!";
	}
	else{
		echo "Password is valid!";
	}
?>