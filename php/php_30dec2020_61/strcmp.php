<?php
	$pswd = "supersecret";
	$pswd2 = "supersecretf";
	echo $test = strcmp($pswd, $pswd2);
	if($test != 0){
		echo "Passwords do not match";
	}
	else{
		echo "Passwords match";
	}
?>