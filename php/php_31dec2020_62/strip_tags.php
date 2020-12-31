<?php 
	$text = "<p>This is paragraph</p>
	<a href='https://www.google.com'>This is link</a>
	<!-- This is comment -->";
	//echo strip_tags($text, '<p><a>');
	echo "\n";
	echo strip_tags($text, '<p><a><!-- -->');
?>