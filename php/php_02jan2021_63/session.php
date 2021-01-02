<?php
	session_start();
	$_SESSION['username'] = "Alim";
	$_SESSION['email'] = "alim@gmail.com";
	echo $_SESSION['username'];
	echo "<pre>";
	print_r($_SESSION);

	echo session_id();
	
?>
<br>
<a href="session_check.php">Check Session</a>