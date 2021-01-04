<form action="" method="post">
	<label for="">Name: </label>
	<input type="text" name="name"><br>
	<label for="">Email: </label>
	<input type="text" name="email"><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];

		$value = "/[a-zA-Z]/";
		$name_valid = preg_match($name, $value);
		$email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);

		if ($name == "") {
			echo "<script>alert('Please enter your name');</script>";
		}
		else if ($email == "") {
			echo "<script>alert('Please enter your email');</script>";
		}
		else if($name_valid == -1){
			echo "<script>alert('Please enter valid name');</script>";
		}
		else if($email_valid){
			"<script>alert('Please enter valid email');</script>";
		}
		else{
			echo "Your Name: $name " . "& your Email: ";
		}
	}
?>