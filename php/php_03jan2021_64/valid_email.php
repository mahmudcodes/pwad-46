<?php
	$email = 'mahmud@gmail325.c';
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Invalid email";
	}
	else{
		echo "Valid email $email";
	}
?>