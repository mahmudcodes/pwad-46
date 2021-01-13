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
      <h1 class="text-center">All Products</h1>

      <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success'){ ?>
        <div class="alert alert-success">
          <strong>Successfully!</strong> New products included...
        </div>
      <?php } ?>

      <?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'){ ?>
        <div class="alert alert-warning">
          <strong>Warning!</strong> Something wrong...
        </div>
      <?php } ?>

      <a href="product_create.php" class="btn btn-success">Create Product</a>
      <hr>
      <div class="">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Product Code</th>
              <th scope="col">Product Name</th>
              <th scope="col">Product Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('includes/db_connect.php');
              $data = "SELECT * FROM products";
              $read = $db->query($data);
          ?>
               <?php if($read){ ?>
             <?php   while($row = $read->fetch_assoc()){ ?>
            
            <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <a href="" class="btn btn-primary">Edit</a> |
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php } ?>
          <?php } else{ ?>
            <td> NO data available !!</td>
          <?php } ?>
          </tbody>
        </table>
      </div>

    </div>

    <?php include('includes/right_side.php'); ?>

</div>

<?php include('includes/footer.php'); ?>

</body>
</html>