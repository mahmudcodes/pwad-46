<?php
	require_once 'config.php';
	require_once 'database.php';
	$db = new Database(); 
	$query = "SELECT * FROM students";
	$read = $db->select_data($query);

	
?>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Roll</th>
		<th>Age</th>
		<th>Class</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	<?php if($read) { ?>
	<?php while($row = $read->fetch_assoc()) { ?>
	
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['roll']; ?></td>
		<td><?php echo $row['age']; ?></td>
		<td><?php echo $row['class']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td>
			<a href="">Edit</a> | 
			<a href="">Delete</a>
		</td>
	</tr>
	<?php } ?>
	<?php } else{ ?>
		<tr>
			<td>No data available !!</td>
		</tr>
	<?php } ?>
</table>