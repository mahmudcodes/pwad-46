<?php 
	$conn = new mysqli("localhost", "root", "", "company"); 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$module_name = $_POST['module_name'];
		$totalmarks = $_POST['totalmarks'];

		$sql = "UPDATE student_info SET name='$name', address='$address', mobile='$mobile', module_name='$module_name', totalmarks='$totalmarks' WHERE id = '$id' ";
		$res = $conn->query($sql);
		echo "<pre>";
		print_r($res);
		exit();
		if($conn){
			echo "Student Updated Successfully !!";
		}
		else{
			echo "Something Wrong !!";
		}
	}

	$select = "SELECT * FROM student_info WHERE id='$id' ";
	$student = $conn->query($select);
	$row = $student->fetch_assoc();
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
				<td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td>
					<textarea name="address" id="" cols="30" rows="10">
						<?php echo $row['address'] ?>
					</textarea>
				</td>
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><input type="text" name="mobile" value="<?php echo $row['mobile'] ?>"></td>
			</tr>
			<tr>
				<td>Module: </td>
				<td><input type="text" name="module_name" value="<?php echo $row['module_name'] ?>"></td>
			</tr>
			<tr>
				<td>Marks: </td>
				<td><input type="text" name="totalmarks" value="<?php echo $row['totalmarks'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>