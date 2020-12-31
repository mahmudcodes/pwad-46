<?php
	// $file = fopen('files/textfile.txt', 'w');
	// $content = "Something needs to be write";
	// fwrite($file, $content);
	// fclose($file);

	$files = fopen('../php_30dec2020_61/email_template.html', 'r');
	$file = '../php_30dec2020_61/email_template.html';
	//echo fread($files, filesize($file));
	$name = "Mahmud, Hasan";
	$email = "mahmud@gmail.com, hasan@gmail.com";
	$test = explode(",",$email);
	print_r($test);
?>