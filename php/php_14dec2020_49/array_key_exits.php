<?php
	$cities = array("Comilla" => "Malai", "Chadpur" => "Hilsa", "Dhaka" => "People", "Rangpur" => "Rice");
	$check = "Rangpur";

	if(array_key_exists($check, $cities)){
		echo "$check is famous for $cities[$check]";
	}
	else{
		echo "Not Found!";
	}
?>