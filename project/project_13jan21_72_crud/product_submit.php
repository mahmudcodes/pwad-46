
<?php

	require_once 'includes/db_connect.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$product_code = $_POST['product_code']; 
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];

		$data = "INSERT INTO products(product_code, name, price) VALUES('$product_code','$product_name','$product_price')";
		$db->query($data);
		$msg = '';
		if($db->affected_rows > 0 ){
			$msg = 'success';
			
		}
		else{
			$msg = 'error';
		}

		header('location: products.php?msg='.$msg);

	}
	else{
		header('location: warning.php');
	}
	
?>