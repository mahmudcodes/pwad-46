<?php
	$users = file("user.txt");
	foreach($users as $user){
		list($name, $profession, $address, $phone, $text) = explode("|", $user);
		printf("Name: %s <br>", $name);
		printf("Profession: %s <br>", $profession);
		printf("Address: %s <br>", $address);
		printf("Phone: %s <br>", $phone);
		printf("Some info: %s <br>", $text);
		echo "<hr>";
	}	
?>