<?php
	$c_name = "user";
	$c_value = "hasan";
	setcookie($c_name, $c_value, time() + (86400 * 30), "/");
	echo $_COOKIE['user'];
?>