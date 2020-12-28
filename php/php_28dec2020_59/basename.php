<?php
	$path = '/home/www/data/users.txt';
	$path2 = 'I:\PWAD-46\Module2_Javascript\users.php';
	$path3 = 'http://localhost/pwad-46/php/php_28dec2020_59/basename.psd';
	echo basename($path, ".txt");
	echo "<br>".basename($path2);
	echo "<br>".basename($path3);
?>