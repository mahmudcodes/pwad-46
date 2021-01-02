<?php
	session_start();
	
	echo $_SESSION['username'] . "<br>";
	echo $_SESSION['email'];

	echo "<pre>";
	print_r($_SESSION);
	echo session_id();
	session_unset();

	echo $_SESSION['username'] = "Shakib" . "<br>";
	echo $_SESSION['email'] = "shakib@gmail.com";

?>