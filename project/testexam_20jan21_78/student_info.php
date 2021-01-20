<?php $conn = new mysqli("localhost", "root", "", "company");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Student</title>
</head>
<body>
	
		<table>
			<h2>Student Information</h2>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Module</th>
				<th>Marks</th>
				<th>Action</th>
			</tr>
			<?php  
				$sql = "SELECT * FROM student_info";
				$result = $conn->query($sql);
				if($result){
					while($row = $result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['address'] ?></td>
				<td><?php echo $row['mobile'] ?></td>
				<td><?php echo $row['module_name'] ?></td>
				<td><?php echo $row['totalmarks'] ?></td>
				<td>
					<a href="student_edit.php?id=<?php echo $row['id'] ?>">Edit</a>
				</td>
			</tr>
			<?php } } else { ?>
				<td colspan="5">No Data Available !!</td>
			<?php } ?>
		</table>
</body>
</html>