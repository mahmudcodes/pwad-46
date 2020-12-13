<?php
	$x = function(){
		echo "This is anonymous_function<br>";
	};
	$x();

	function myFunc(){
		echo "This is normal function<br>";
	}
	$y = "myFunc";
	$y();

	$a = 15;
	$test = function() use (&$a){
		//global $a;
		$a += 100;
		echo $a . "<br>";
	};
	$test();
	echo $a . "<br>";
?>