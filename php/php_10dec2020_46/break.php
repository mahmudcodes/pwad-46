<?php
	$primes = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47);
	// $randomNumber = rand(100, 500);
	// echo $randomNumber;
	// echo "<br>";
	// $x = in_array($randomNumber, $primes);
	// echo $x;
	for($count = 1; $count < 1000; $count++){
		$randomNumber = rand(1, 50);
		if(in_array($randomNumber, $primes)){
			printf("Prime Number found! %d <br/>", $randomNumber);
			break;
		}
		else{
			printf("No Prime Number found: %d <br/>", $randomNumber);
		}
	}
?>