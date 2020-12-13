<?php
	$fullname = $_POST['fullname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$district = $_POST['district'];
	$hobbies = $_POST['hobbies'];
	$address = $_POST['address'];
	foreach ($address as $check) {
		$check;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTML Table</title>
	<style>
		table, td, th{
			border: 1px solid gray;
			border-spacing: 0;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h2>Profile Information</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Password</th>
			<th>District</th>
			<th>Hobbies</th>
			<th>Address</th>
		</tr>
		<tr>
			<td><?php echo $fullname; ?></td>
			<td><?php echo $gender; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $district; ?></td>
			<td><?php echo $check; ?></td>
			<td><?php echo $address; ?></td>
		</tr>
	</table>
</body>
</html>