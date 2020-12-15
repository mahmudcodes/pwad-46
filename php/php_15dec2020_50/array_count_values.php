<title>Array Search</title>
<?php 
	$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibandha", "Amir"=>"Chapai");
	$students['Mohsin'] = "Noakhali";
	$students['Ruhul'] = "Noakhali";
	$students['Parvez'] = "Noakhali";
	$students['Mahmud'] = "Chapai";
	echo "<pre>";
	$counts = array_count_values($students);
	print_r($counts);
?>