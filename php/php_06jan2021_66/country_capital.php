<?php
	$countries = array("Bangladesh" => "Dhaka", "Afghanistan" => "Kabul", "Albania" => "Tirana", "Nepal" => "Kathmandu");
	echo "<pre>";
	print_r($countries);
	asort($countries);
	print_r($countries);
	foreach ($countries as $key => $value) {
		echo "$key = $value <br>";
	}
	
?>