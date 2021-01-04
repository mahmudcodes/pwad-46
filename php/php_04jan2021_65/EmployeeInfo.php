<?php
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$basic = $_POST['basic'];
		$house_rent = $_POST['house_rent'];
		$transport = $_POST['transport'];
		$total_salary = $basic + $house_rent + $transport;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Info</title>
</head>
<body>
	<table>
		<div class="input_form">
			<h3>Employee Info</h3>
			<table>
				<tr>
					<td>ID: </td>
					<td><?php if(isset($id)){ echo $id; } ?></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><?php if(isset($name)){ echo $name; } ?></td>
				</tr>
				<tr>
					<td>Total Salary: </td>
					<td><?php if(isset($total_salary)){ echo $total_salary; } ?></td>
				</tr>
			</table>
		</div>
	</table>
</body>
</html>