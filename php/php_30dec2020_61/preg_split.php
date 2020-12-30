<?php
	$text = "Jason+++Gilmore+++Columbus+++OH";
	$filds = explode('+++', $text);
	echo "<pre>";
	print_r($filds);
?>
<?php
	$text = "Jason+++Gilmore+++++++++Columbus+++OH";
	$filds = preg_split('/\++/', $text);
	echo "<pre>";
	print_r($filds);
?>
<?php
	$text = "Jason+++Gilmore+++++++++Columbus+++OH";
	$filds = preg_split('/\++/', $text);
	foreach($filds as $fild){
		echo $fild."<br>";
	}
?>