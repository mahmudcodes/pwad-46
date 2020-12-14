<?php 
	$states = array("Dhaka", "Rajshahi", "Bogura", "Pabna");
	array_pop($states);
	array_pop($states);
	array_pop($states);
	echo "<pre>";
	print_r($states);
?>