<?php
	$conn = new mysqli("localhost","root","","pwad_php_crud");
	if($_SERVER['REQUEST_METHOD']=="POST"){
		extract($_POST);
		$query = "CALL student_insert($name,$email,$roll,$age,$class,$address)";
		$conn->query($query);
		print_r($conn);
		if($conn->affected_rows > 0){
			echo "Data Inserted Successfully!";
		}
		else{
			echo "Something Wrong!";
		}
	}
?>
<form action="" method="post">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Roll: </td>
			<td><input type="number" name="roll"></td>
		</tr>
		<tr>
			<td>Age: </td>
			<td><input type="number" name="age"></td>
		</tr>
		<tr>
			<td>Class: </td>
			<td><input type="text" name="class"></td>
		</tr>
		<tr>
			<td>Address: </td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>