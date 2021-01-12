<?php require_once('connection_obj.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/fontawesome.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Create User</title>
  <style>
    body{
      padding: 20px;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-9">
          <h2>CRUD | <b>Create User</b></h2>
        </div>
        <div class="col-sm-3 right">
          <a href="view.php" class="btn btn-success">
            <img src="left.svg" alt="Back"> Back User
          </a>
            </div>
          </div>
        </div>
        <?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$location = $_POST['location'];
				$age = $_POST['age'];
				$salary = $_POST['salary'];

				require_once('connection_obj.php');

				$sql = "INSERT INTO users(name, email, location, age, salary) VALUES('$name','$email','$location','$age','$salary')";
				$db->query($sql);
				if($db->affected_rows>0){
					header('location: view.php');
				}
			}
		?>
        <form action="" method="POST">
        	<div class="form-group">
        		<label for="name">Name</label>
        		<input type="text" class="form-control" placeholder="Enter name" name="name">
        	</div>
        	<div class="form-group">
        		<label for="email">Email</label>
        		<input type="email" class="form-control" placeholder="Enter email" name="email">
        	</div>
        	<div class="form-group">
        		<label for="location">Location</label>
        		<textarea class="form-control" rows="3" name="location"></textarea>
        	</div>
        	<div class="form-group">
        		<label for="age">Age</label>
        		<input type="text" class="form-control" placeholder="Enter age" name="age">
        	</div>
        	<div class="form-group">
        		<label for="salary">Salary</label>
        		<input type="text" class="form-control" placeholder="Enter salary" name="salary">
        	</div>
        	<input type="submit" class="btn btn-primary" value="Submit">
        	<input type="reset" class="btn btn-warning" value="Reset">
        </form>
      </div>
    </div>

    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </body>
  </html>