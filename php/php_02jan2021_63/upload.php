<?php
	$filename = $_FILES['homework']['name'];
	$tmpname = $_FILES['homework']['tmp_name'];
	$test = rand(10, 100).$filename;
	$destination = "uploads";
	move_uploaded_file($tmpname, $destination."/".$test);

	echo "<pre>";
	print_r($_FILES);
?>