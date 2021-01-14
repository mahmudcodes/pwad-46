
<?php

	require_once 'includes/db_connect.php';
	
	$id = $_GET['id'];

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$product_code = $_POST['product_code']; 
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$msg = '';

		if($product_code !=='' || $product_name !=='' || $product_price !==''){
			$data = "UPDATE products SET product_code='$product_code', name='$product_name', price='$product_price' WHERE id='$id' ";
			$db->query($data);
			
			if($db->affected_rows > 0 ){
				$msg = 'update_success';
			}
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