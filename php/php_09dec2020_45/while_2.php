<script>
	var fruit = ["Apple", "Mango", "Orange", "Bannana"];
	var ol = "<ol>";
	for (var i=0; i<fruit.length; i++){

	}
	ol += "<ol>";
	document.write(ol);

</script>

<h2>Do While Loop</h2>
<?php
	$x = 1;
	do {
		echo "$x <br>";
		$x++;
	} while ($x <= 10);
?>
<h2>For Loop</h2>
<?php
	$num = 1;
	for($num; $num <= 10; $num++){
		echo "$num <br>";
	}
?>
<h2>For Loop - Array</h2>
<?php
	$fruit = ["Apple", "Mango", "Orange", "Bannana", "Others"];
	//echo count($fruit);
	$ol = "<ol>";
	for($i=0; $i<count($fruit); $i++){
		$ol .= "<li>".$fruit[$i]."</li>";
	}
	echo $ol .= "</ol>";
?>
<h2>For Each Loop</h2>
<style>
	a{
		text-decoration: none;
	}
</style>