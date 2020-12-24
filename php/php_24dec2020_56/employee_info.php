<?php
	$name = $_POST["name"];
	$basic = $_POST["basic"];
	$house_rent = $_POST["house_rent"];
	$transport = $_POST["transport"];
	$total_salary = (int)$basic + (int)$house_rent + (int)$transport;
?>
<h2>Employee Details</h2>
<table>
	<tr>
		<td>Name:</td>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<td>Total Salary:</td>
		<td><?php echo $total_salary; ?></td>
	</tr>
</table>