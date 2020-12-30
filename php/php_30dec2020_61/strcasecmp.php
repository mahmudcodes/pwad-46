<?php
	$email1 = "admin@example.com";
	$email2 = "cadmin@example.com";
	echo strcasecmp($email1, $email2);
	if(!strcasecmp($email1, $email2)){
		echo "The email address identical";
	}
?>