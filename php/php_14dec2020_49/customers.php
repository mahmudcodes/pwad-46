<?php 
	$customers = array();
	$customers[] = array("Mahmud Hasan", "mahmud@gmail.com", "856-586-862");
	$customers[] = array("Shakil Khan", "shakil@gmail.com", "885-563-867");
	$customers[] = array("Amir Hossain", "amir@gmail.com", "825-625-862");
	
	// echo "<pre>";
	// print_r($customers);

	// foreach($customers as $customer){
	// 	vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
	// }
	echo "<pre>";
	for($i=0; $i<count($customers); $i++){
		for($j=0; $j<count($customers); $j++){
			echo "<p>".$customers[$i][$j]."</p>";
		}
	}
	echo "<hr>";
	for($i=0; $i<count($customers); $i++){
		foreach($customers[$i] as $customer){
			echo "<p>".$customer."</p>";
		}
	}
?>