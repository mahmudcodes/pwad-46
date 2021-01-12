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
				require_once('connection_obj.php');

				$sql = "SELECT * FROM products WHERE id=$id";
				$db->query($sql);
		?>
        <form action="" method="POST">
        	<div class="form-group">
        		<label for="product_name">Product Name</label>
        		<input type="text" class="form-control" value="<?php echo $product_name; ?>">
        	</div>
        	<div class="form-group">
        		<label for="product_code">Product Code</label>
        		<input type="text" class="form-control" value="<?php echo $product_code; ?>">
        	</div>
        	
        	<div class="form-group">
        		<label for="product_price">Product Price</label>
        		<input type="number" class="form-control" value="<?php echo $product_price; ?>">
        	</div>
        	<div class="form-group">
        		<label for="product_quantity">Product Quantity</label>
        		<input type="number" class="form-control" value="<?php echo $product_quantity; ?>">
        	</div>
        	<input type="submit" class="btn btn-primary" value="Submit">
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