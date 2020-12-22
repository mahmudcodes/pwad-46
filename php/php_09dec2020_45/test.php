<?php
	$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
$d = explode( ',', $input1 ) ;
echo $d;
var_dump( explode( ',', $input2 ) );
var_dump( explode( ',', $input3 ) );
?>