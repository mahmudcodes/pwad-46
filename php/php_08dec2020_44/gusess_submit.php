<?php
	$secret_number = 453;
	$_POST['number'] = 442;
	if($_POST['number'] == $secret_number){
		echo "<h2 style='color: green;'>Congratulations! You are right...<h2>";
	}
	elseif(abs($_POST['number'] - $secret_number) < 10){
		echo "<h2 style='color: yellow;'>Warning! You are getting close...<h2>";
	}
	else{
		echo "<h2 style='color: red;'>Sorry! Wrong Number Input...<h2>";
	}
?>