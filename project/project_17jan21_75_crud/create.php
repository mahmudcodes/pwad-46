<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create</title>
</head>
<body>
	<?php
		define('HOST', 'localhost');
		define('USER', 'root');
		define('PASS', '');
		define('DB', 'classicpwad46');

		$db = new mysqli(HOST, USER, PASS, DB);

		if($db->connect_errno){
			echo "Failed to connect to MySQL: " . $db->connect_error;
			exit();
		}

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				$gender = $_POST['gender'];

			$sql = "CALL data_insert('$name', '$email','$mobile','$gender')";
			
			$db->query($sql);
			if($db->affected_rows>0){
				echo "Data insert";
			}
			else{
				echo "Something wrong";
			}
		}
	?>
	<form action="create.php" method="post">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>