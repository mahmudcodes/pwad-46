<?php $conn = new mysqli("localhost", "root","","company") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>User</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){ 
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
			$result = $conn->query($sql);

			if($result->num_rows > 0){
				echo "Login Successfully !!";
			}
			else{
				echo "User Name or Password is Wrong !! ";
			}
		}
	?>
	<form action="" method="POST">
		<h2>Login</h2>
		<table>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>