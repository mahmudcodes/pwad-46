<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prepared Statement</title>
</head>
<body>
	<h2>Prepared Statement Input</h2>
	<form action="prepared_statement.php" method="post">
		<table>
			<tr>
				<td>SKU: </td>
				<td><input type="text" name="sku"></td>
			</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Price: </td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>