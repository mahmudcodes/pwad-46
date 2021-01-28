<?php $conn = new mysqli("localhost", "root", "", "exam_28jan21_85") ?>
<?php 
    $success = '<div class="alert alert-success"><strong>Success!</strong>
              </div>';
    $error = '<div class="alert alert-danger"><strong>Error!</strong>
              </div>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Create Manufacturer</h2>
  		<?php 
  			if($_SERVER['REQUEST_METHOD'] == 'POST'){
  				$name = $_POST['name'];
  				$address = $_POST['address'];
  				$contact = $_POST['contact'];
  				$sql = "CALL insert_manufacturer('$name', '$address', '$contact')";
  				$conn->query($sql);
  				if($conn->affected_rows > 0){
  					echo $success;
  				}
  				else{
  					echo $error;
  				}
  			} 
      	?>
  <form action="" method="post">
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="">Address:</label>
      <textarea class="form-control" name="address" cols="5" rows="4"></textarea>
    </div>
    <div class="form-group">
      <label for="">Contact:</label>
      <input type="text" class="form-control" name="contact">
    </div>
    <input type="submit" class="btn btn-default" value="Submit">
  </form>
</div>

</body>
</html>
