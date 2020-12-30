<?php
	ini_set('display_errors', 'Off');
	try {
		$fh = fopen("contact.txt", "r");
		if (!$fh) {
			throw new Exception("Could not open the file!");
		}
	} catch (Exception $e) {
		echo "Error! ".$e->getMessage();
	}

?>