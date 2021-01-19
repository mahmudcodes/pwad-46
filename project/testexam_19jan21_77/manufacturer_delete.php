<?php $conn = new mysqli("localhost", "root","","company") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Product</title>
</head>
<body>
<?php
			if(isset($_GET['del'])){ 
				$id = $_GET['del'];

				$sql = "DELETE FROM manufacturer WHERE id= '$id' ";
				$result = $conn->query($sql);
				if($result){
					echo "Deleted Successfully !!";
				}
				else{
					echo $row['name']."Something is Wrong !! ";
				}
			}
		?>
		<form action="" method="get">
			<table>
				<tr>
					<td>Manufacturer</td>
				</tr>
				<tr>
					<td>
						<?php 
							$sql_2 = "SELECT * FROM manufacturer";
							$result_2 = $conn->query($sql_2);
						?>
						<select name="del">
							<option>Select</option>
							<?php 
								if($result_2){
									while($row = $result_2->fetch_assoc()){
							?>

							<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
							<?php
								}
									}
							?>
						</select>
					</td>
					
				</tr>
				<tr>
					<td><input type="submit" value="Delete"></td>
				</tr>
			</table>
		</form>
</body>
</html>