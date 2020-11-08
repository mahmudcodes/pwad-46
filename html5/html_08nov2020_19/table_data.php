<?php
 $con = mysqli_connect("localhost","root","","pwad_46");
 if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }
 
 mysqli_select_db("my_db", $con);
 
 $result = mysqli_query("SELECT * FROM bootstrap_table");
 
 mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Table Data</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<h2>Total Information</h2>
				<table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Email</th>
				      <th scope="col">Present Address</th>
				      <th scope="col">Permanent Address</th>
				      <th scope="col">City</th>
				      <th scope="col">State</th>
				      <th scope="col">Zip Code</th>
				      <th scope="col">Check In</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>@mdo</td>
				      <td>@mdo</td>
				      <td>@mdo</td>
				      <td>@mdo</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>