<title>Range()</title>
<?php 
	$output = range(1, 10);
	echo "<pre>";
	print_r($output);
	$output = range(50, 0, 2);
	echo "<pre>";
	print_r($output);
	$output = range('a', 'f', 2);
	echo "<pre>";
	print_r($output);
?>