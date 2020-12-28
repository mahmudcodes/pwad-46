<?php 
	$path = 'I:\PWAD-46\Module2_Javascript\users.php';
	$info = pathinfo($path);
	echo "<pre>";
	print_r($info);
	echo $info['dirname'];
?>