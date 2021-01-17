
<?php

	require_once 'includes/db_connect.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$fullname = $_POST['fullname']; 
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = md5($password);
		$msg = '';

		if($fullname !=='' || $email !=='' || $password !==''){
			$data = "INSERT INTO users(fullname, email, password) VALUES('$fullname','$email','$password')";
			$db->query($data);
			
			if($db->affected_rows > 0 ){
				$msg = 'success';
				header('location: user_index.php?msg='.$msg);
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