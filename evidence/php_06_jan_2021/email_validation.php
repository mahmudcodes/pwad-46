<form action="" method="post">
	<label for="">User Name: </label>
	<input type="text" name="user_name"><br>
	<label for="">E-mail: </label>
	<input type="text" name="email"><br>
	<input type="submit" value="Submit" name="submit">
</form>

<?php
	if(isset($_POST['submit'])){
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		if(!preg_match('/[A-z]{4,8}$/', $user_name)){
			echo "<p>User name must be between 4 to 8 digit</p>";
		}
		else if(!preg_match('/[A-z]+@[a-z]+\.[a-z]{2,4}/', $email)){
			echo "<p'>Email not valid, must be '@' symbol.</p>";
		}
		else{
			echo "<p style='color:green;'>Login Successfull</p><p>User Name: $user_name</p><p>E-mail: $email</p>";
		}
	}
?>