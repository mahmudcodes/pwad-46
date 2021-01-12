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
  <title>Create Product</title>
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
          <h2>CRUD | <b>Create Product</b></h2>
        </div>
        <div class="col-sm-3 right">
          <a href="product_view.php" class="btn btn-success">
            <img src="left.svg" alt="Back"> Back Product
          </a>
            </div>
          </div>
        </div>
        <?php
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$product_name = $_POST['product_name'];
				$product_code = $_POST['product_code'];
				$product_price = $_POST['product_price'];
				$product_quantity = $_POST['product_quantity'];

				require_once('connection_obj.php');

				$sql = "INSERT INTO products(product_name, product_code, product_price, product_quantity) VALUES('$product_name','$product_code','$product_price','$product_quantity')";
				$db->query($sql);
        $msg = '';
				if($db->affected_rows>0){
          $msg = 'success';
					
				}
        else{
          $msg = 'error';
        }
        header('location: product_view.php?msg='.$msg);

			}
		?>
        <form action="" method="POST">
        	<div class="form-group">
        		<label for="product_name">Product Name</label>
        		<input type="text" class="form-control" placeholder="Enter product name" name="product_name">
        	</div>
        	<div class="form-group">
        		<label for="product_code">Product Code</label>
        		<input type="text" class="form-control" placeholder="Enter product code" name="product_code">
        	</div>
        	
        	<div class="form-group">
        		<label for="product_price">Product Price</label>
        		<input type="number" class="form-control" placeholder="Enter product price" name="product_price">
        	</div>
        	<div class="form-group">
        		<label for="product_quantity">Product Quantity</label>
        		<input type="number" class="form-control" placeholder="Enter product quantity" name="product_quantity">
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