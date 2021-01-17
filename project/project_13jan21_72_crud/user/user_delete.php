<?php
		include('includes/db_connect.php');
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$msg = '';
		$id = $_GET['id'];
		$data = "DELETE FROM users WHERE id='$id' ";

		if($db->query($data)){
			$msg = 'delete_success';
		}
		else{
			$msg = 'error';
		}
		header('location: user_index.php?msg='.$msg);
	}
		
	else{
		header('location: ../warning.php');
	}

?>