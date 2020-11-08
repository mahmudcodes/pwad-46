<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Bootstrap Table</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<h2>Information</h2>
				<form action="register.php" method="post">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Email</label>
				      <input type="email" class="form-control" name="email">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Password</label>
				      <input type="password" class="form-control" name="password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Present Address</label>
				    <input type="text" class="form-control" name="present_address" placeholder="1234 Main St">
				  </div>
				  <div class="form-group">
				    <label for="inputAddress2">Permanent Address</label>
				    <input type="text" class="form-control" name="permanent_address" placeholder="Apartment, studio, or floor">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" name="city">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">State</label>
				      <select id="inputState" name="state" class="form-control">
				        <option selected>Choose...</option>
				        <option value="Alabama">Alabama</option>
				        <option value="Alaska">Alaska</option>
				        <option value="Arizona">Arizona</option>
				      </select>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">Zip</label>
				      <input type="text" class="form-control" name="zip_code">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" name="check_in" value="yes">
				      <label class="form-check-label" for="gridCheck">
				        Check me out
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary">Sign in</button>
				</form>
				<br>
				<p><a href="table_data.php">Show All Data</a></p>
			</div>
		</div>
	</div>
</body>
</html>