<?php
	$userInfo = "Name: <b>Zeev Suraski</b><br>Title: <b>PHP Guru</b>";
	preg_match_all("/<b>(.*)<\/b>/U", $userInfo, $match);
	printf("%s <br /> %s", $match[0][0], $match[0][1]);
?>