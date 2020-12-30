<?php
	$line = "vim is the greatest word processor ever created! Oh vims, how I love thee!";
	if(preg_match_all("/\bvim\b/i", $line, $m)){
		print "Match Found";
	}
	echo "<pre>";
	print_r($m);
?>