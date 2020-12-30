<?php
	$foods = array("pasta", "steak", "fish", "potatoes");
	$food = preg_grep("/^p/", $foods);
	echo "<pre>";
	print_r($food);
?>