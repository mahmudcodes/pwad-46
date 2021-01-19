<?php $conn = new mysqli("localhost", "root","","company") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Product Price</title>
</head>
<body>
	<table class="table ">
		<h2 class="text-info">Product Information</h2>
		<tr class="text-primary">
			<th>Product Name</th>
			<th>Price</th>
		</tr>
		<?php  
			$sql = "SELECT * FROM product_5000";
			$result = $conn->query($sql);
			if($result){
				while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['product_name']; ?></td>
			<td><?php echo $row['price']; ?></td>
		</tr>
		<?php } } else { ?>
			<td colspan="2">No Data Available !!</td>
		<?php } ?>
	</table>
</body>
</html>