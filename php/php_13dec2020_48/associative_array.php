<?php
	$car_brands = [12 => "Toyota", 15 => "BMW", "Tata"];
	echo "<pre>";
	print_r($car_brands);
	$german_cars = [20 => "Audi", 22 => "Porche", "Vw"];
	var_dump($german_cars);
	$district = ["DH" => "Dhaka", "CM" => "Comilla", "RAJ" => "Rajshahi", "LA" => "Lalmonirhat"];
	print_r($district);
	$population = [
		"Dhaka" => array("Male" => 100, "Female" => 150), 
		"Sylhet" => array("Male" => 300, "Female" => 250), 
		"Barisal" => array("Male" => 400, "Female" => 600), 
		"Bogura" => array("Male" => 700, "Female" => 695)
	];
	print_r($population);
	echo "<br>Total Male in Dhaka : ".$population['Dhaka']['Male']."<br>";
	echo "<br>Total Female in Dhaka : ".$population['Dhaka']['Female'];

	function person(){
		return ['Mahmud Hasan', "mahmud@gmail.com", "Owner"];
	}
	echo "<pre>";
	$name = person();
	//echo $name = person()[0];
	//print_r($name);
	echo $name[2];
?>