<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php include('includes/head_file.php'); ?>

</head>
<body>

  <?php include('includes/header.php'); ?>
  
  <div class="container-fluid text-center">    
    <div class="row content">

      <?php include('includes/left_side.php'); ?>

      <div class="col-sm-8 text-left"> 
        <h1 class="text-center">Create Product</h1>
        <!-- From Close -->
        <div class="well">
          <form action="product_submit.php" method="POST">
            <div class="form-group">
              <label for="product_code">Product Code</label>
              <input type="text" class="form-control" name="product_code">
            </div>
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
              <label for="product_price">Product Price</label>
              <input type="number" class="form-control" name="product_price">
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
          </form>
        </div>
      </div>
      <!-- Form Close -->
      <?php include('includes/right_side.php'); ?>

    </div>

    <?php include('includes/footer.php'); ?>

  </body>
  </html>
