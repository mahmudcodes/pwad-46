<?php $conn = new mysqli("localhost", "root","","company") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Manufacturer</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){ 
			$name = $_POST['name'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];

			$sql = "CALL insert_manufacturer('$name', '$address', '$contact') ";
			$conn->query($sql);

			if($conn->affected_rows > 0){
				echo "Manufacturer Inserted Successfully !!";
			}
			else{
				echo "Something is Wrong !! ";
			}
		}
	?>
	<form action="" method="POST">
		<h2>Manufacturer</h2>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="address"></textarea>
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>