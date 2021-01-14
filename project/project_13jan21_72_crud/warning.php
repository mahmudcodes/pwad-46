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
    <br><br><br><br> 
    
      <div class="jumbotron">
        <div class="text-danger text-center">
          <h1 class="text-center ">Error! </h1>
          <a href="index.php" class="btn btn-warning">Bact to Home</a>
        </div>    
      </div>
    
      
      
    </div>

    <?php include('includes/right_side.php'); ?>

</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
