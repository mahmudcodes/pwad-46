<title>Array Search</title>
<?php 
	$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibandha", "Amir"=>"Chapai");
	$students['Mohsin'] = "Noakhali";
	$students['Ruhul'] = "Noakhali";
	$students['Parvez'] = "Noakhali";
	$students['Mahmud'] = "Chapai";
	echo "<pre>";
	$counts = array_unique($students);
	//print_r($counts);
	$districts = ["Dhaka", "Rajshahi", "Dhaka", "Niamatpur", "Dhaka", "Rajshahi", "Pabna"];
	$counts = array_unique($districts);
	print_r($counts);
?>