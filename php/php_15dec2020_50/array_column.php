<title>Array Search</title>
<?php
	// $students = array(
	// 	["Name" => "Alim", "Age" => 25, "Phone" => "01596-965823"],
	// 	["Name" => "Towfiq", "Age" => 23, "Phone" => "01358-352696"],
	// 	["Name" => "Amir", "Age" => 20, "Phone" => "01869-125489"]
	// );
	$students = [
		["Name" => "Alim", "Age" => 25, "Phone" => "01596-965823"],
		["Name" => "Towfiq", "Age" => 23, "Phone" => "01358-352696"],
		["Name" => "Amir", "Age" => 20, "Phone" => "01869-125489"]
	];
	$output = array_column($students, 'Age');
	echo "<pre>";
	print_r($output);
?>