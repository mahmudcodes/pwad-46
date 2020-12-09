
<?php
	$sites = array("www.yahoo.com", "www.google.com", "www.facebook.com");
	foreach($sites as $x){
		$out = trim($x, "www.");
		$out2 = trim($x, ".com");
		
		$result = "<a href='https://$x' target='_blank'>$out2</a>";
		echo $result . " | ";
	}
?>