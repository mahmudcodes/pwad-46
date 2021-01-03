<?php
	$text = " ";
	echo str_pad($text, 50, ' ~ ~ ~ ');
	echo "<br>";
	echo str_pad($text, 50, ' . : . ', STR_PAD_BOTH)."<br>";
	echo str_pad($text, 50, ' * * * ', STR_PAD_LEFT);
?>