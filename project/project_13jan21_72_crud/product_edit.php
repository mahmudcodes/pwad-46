<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit - Product</title>
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
        <h1 class="text-center">Edit Product</h1>
        <?php 
            require_once 'includes/db_connect.php';
            $id = $_GET['id'];
            $data = "SELECT * FROM products WHERE id='$id' ";
            $read = $db->query($data);
            $row = $read->fetch_assoc();
            
            $product_code = $row['product_code']; 
            $name = $row['name'];
            $price = $row['price'];
        ?>
        <!-- From Close -->
        <div class="well">
          <form action="product_update.php?id=<?php echo $row['id']; ?>" method="POST">
            <div class="form-group">
              <label for="product_code">Product Code</label>
              <input type="text" class="form-control" name="product_code"value="<?php echo $product_code; ?>">
            </div>
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input type="text" class="form-control" name="product_name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
              <label for="product_price">Product Price</label>
              <input type="number" class="form-control" name="product_price" value="<?php echo $price; ?>">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
          </form>
        </div>
      </div>
      <!-- Form Close -->
      <?php include('includes/right_side.php'); ?>

    </div>

    <?php include('includes/footer.php'); ?>

  </body>
  </html>
