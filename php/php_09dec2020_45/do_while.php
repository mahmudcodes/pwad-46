
<?php
	$sites = array("www.apple.com", "www.google.com", "www.facebook.com", "www.bdjobs.com", "www.webdevs.bd", "www.wedevs.org", "www.hasan.xyz", "www.devbd.net", "www.helpsbd.dev");
	foreach($sites as $x){
		$out = trim($x, "www.com");
		$out = ucfirst($out);
		$result = "<a href='https://$x' target='_blank'>$out</a>";
		echo $result . " | ";
	}
?>