<?php
	$files = fopen('files/contacts.csv', 'r');
	// $text = "<ul>";
	while($file = fgets($files)){
		echo "$file<br>";
	}
	// echo $text .= "</ul>";
?>
<?php
	// $files = fopen('files/contacts.csv', 'r');
	
	// while(!feof($files)){
	// 	echo fgets($files) . "<br>";
	// }
	// fclose($files);
?>