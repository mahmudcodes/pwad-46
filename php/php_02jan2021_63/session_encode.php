<?php
	session_start();
	$_SESSION['username'] = "Siyam";
	$_SESSION['number'] = "100";
	$_SESSION['log_in'] = date("M d Y H:i:s");

	$sessionVars = session_encode();
	echo "<pre>";
	print_r(serialize($_SESSION));
?>