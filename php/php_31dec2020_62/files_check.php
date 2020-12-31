<?php
	$file = file('files/info.txt');
	
	foreach($file as $user){
		$users = explode(',', $user);
		list($name, $email) = $users;
		trim($email);
		echo "<a href='mailto:$email'>$name</a><br>";
	}
?>