<?php
	ini_set("display_errors", 0);

	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'pwad_php_crud');

	$db = new mysqli(HOST, USER, PASS, DB);

	if($db->connect_errno){
		echo "Failed to connect to MySQL: " . $db->connect_error;
		exit();
	}
?>