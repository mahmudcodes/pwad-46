
<?php
	$sites = array("www.apple.com", "www.google.com", "www.facebook.com", "www.bdjobs.com", "www.webdevs.bd", "www.wedevs.org", "www.hasan.xyz", "www.devbd.net", "www.helpsbd.dev");
	foreach($sites as $x){
		$out = trim($x, "www.com");
		$out = ucfirst($out);
		$result = "<a href='https://$x' target='_blank'>$out</a>";
		echo $result . " | ";
	}

	$sites = array("www.yahoo.com", "www.google.com", "www.facebook.com");
// 	$check = explode(".", $sites);
// 		foreach($check as $y){
// 			echo $y."<br>";
// 		}
// 		$arr = explode(',', $sites);
// foreach ($arr as $val) {strlen($val);}
	// foreach($sites as $x){
	// 	$check = explode(".", $sites);
	// 	foreach($check as $y){
	// 		$result = "<a href='https://$x' target='_blank'>$y</a>";
	// 	echo $result . " | ";
	// 	}
		
		
	// }
	for($i=0; $i<count($sites); $i++){
		$separated = explode('.', $sites[$i]);
		echo "<pre>";
		//var_dump($separated[$i]);
		echo $separated[$i];
		
}
/*
$separated = explode('.', $sites);
foreach ($separated as $value) {

    echo strtoupper($value);

    // In order to display them in uppercase,
    // just do echo strtoupper($value);
}
*/
?>