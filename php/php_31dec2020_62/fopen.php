<?php
	$file = 'files/textfile.txt';
	$current_content = file_get_contents($file);
	$current_content .= "lorem20\n";
	$change_content = file_put_contents($file, $current_content);
?>