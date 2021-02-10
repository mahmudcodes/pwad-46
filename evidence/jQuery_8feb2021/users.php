<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];  
		$password = $_POST['password'];
		$password = md5($password);  
		$conn = new mysqli("localhost", "root", "", "mycompany");
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
		$data = $conn->query($sql);
		if ($data->num_rows > 0) {
			echo "Login Success";
		}
		else{
			echo "Worng User Name or Password";
		}
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td>User Name:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>