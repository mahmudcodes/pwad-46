<form action="" method="post">
	<label for="">Name: </label>
	<input type="text" name="name"><br>
	<label for="">Email: </label>
	<input type="text" name="email"><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$email = $_POST['email'];
		//$pattern = '/[a-zA-Z]{4, 12}/';
		$errors = array();
		if($name==''){
			$errors[] = "<p>Please enter name</p>";
		}
		else{
			if(!preg_match('/^[A-z]{4,12}$/', $name)){
				$errors[] = "<p>Name must be between 4 to 12 charecters, not numbers!</p>";
			}
		}
		if($email==''){
			$errors[] = "<p>Please enter email</p>";
		}
		else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors[] = "<p>Please enter valid email</p>";	
			}
		}
		if(count($errors)<1){
			echo "<p>Name: $name & Email: $email</p>";
		}
		else{
			foreach ($errors as $error) {

				echo $error;
			}
		}



		// if($_POST['name']==''){
		// 	echo "Please enter your name<br>";
		// }
		// else{
		// 	$name = $_POST['name'];
		// }
		
		// if($_POST['email']==''){
		// 	echo "Please enter your email<br>";
		// }
		// else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		// 	echo "Please enter valid email";
		// }
		// else{
		// 	$email = $_POST['email'];
		// }
		// echo "Name: $name & Email: $email";
	}
?>