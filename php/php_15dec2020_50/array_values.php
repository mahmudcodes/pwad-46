<title>Array Search</title>
<?php 
	$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibandha", "Amir"=>"Chapainawabganj");
	//$name = array_search("Gaibandha", $students);
	//echo $name;
	$students['Mohsin'] = "Noakhali";
	echo "<pre>";
	print_r($students);
	$names = array_values($students);
	echo "<pre>";
	print_r($names);
?>