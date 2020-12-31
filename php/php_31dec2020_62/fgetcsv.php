<?php
	$file = fopen('files/contacts.csv', 'r');

	// while($data = fgetcsv($file, 1024, ',')){
	// 	foreach($data as $item){
			
	// 	}
	// }
	
	while(list($name, $email, $phone) = fgetcsv($file, 1024, ',')){
		echo $name."<br>$email<br>$phone<br>";
	}
?>