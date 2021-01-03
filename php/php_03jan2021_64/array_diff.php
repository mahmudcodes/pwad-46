<?php
	$array1  = array("OH", "CA", "NY", "HI", "CT","IM", "iA", "Ia");
	$array2  = array("OH", "CA", "HI", "NY", "IA", "MI", "IM", "TD");
	$diff = array_diff($array1, $array2);
	echo "<pre>";
	print_r($diff);
?>