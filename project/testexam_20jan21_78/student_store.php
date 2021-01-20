<?php 
	$conn = new mysqli("localhost", "root", "", "company"); 
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];

		$sql = "CALL store_student('$name', '$address', '$mobile') ";
		$conn->query($sql);
		if($conn->affected_rows > 0){
			echo "Student Inserted Successfully !!";
		}
		else{
			echo "Something Wrong !!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Student</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>