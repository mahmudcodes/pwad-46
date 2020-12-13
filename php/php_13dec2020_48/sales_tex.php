<?php
	function salesTax($price, $tax=0){
		return $price + ($price * $tax);
	}
	//echo salesTax(2000, 0.15);
	$product_price = 10000;
	$tax_rate = 0.20;
	echo salesTax($product_price, $tax_rate);
?>