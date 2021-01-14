
<?php

	require_once '../includes/db_connect.php';
	
	$id = $_GET['id'];

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$fullname = $_POST['fullname']; 
		$email = $_POST['email'];
		$password = $_POST['password'];
		$msg = '';

		if($fullname !=='' || $email !=='' || $password !==''){
			$data = "UPDATE users SET fullname='$fullname', email='$email', password='$password' WHERE id='$id' ";
			$db->query($data);
			
			if($db->affected_rows > 0 ){
				$msg = 'update_success';
			}
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