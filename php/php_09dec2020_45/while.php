<?php
	$count = 1;
	while ($count <= 10) {
		//echo "Value is : " . $count . "<br>";
		printf("%d squared = %d <br>", $count, pow($count, 1));
		$count++;
	}
?>