<?php
	require_once('connection_obj.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE id=$id";
	$msg = '';
	if($db->query($sql)==true){
		$msg = 'delete';
	}
	header('location: product_view.php?msg='.$msg);
?>