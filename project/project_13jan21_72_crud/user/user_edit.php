<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit - User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php include('../includes/head_file.php'); ?>

</head>
<body>

  <?php include('../includes/header.php'); ?>
  
  <div class="container-fluid text-center">    
    <div class="row content">

      <?php include('../includes/left_side.php'); ?>

      <div class="col-sm-8 text-left"> 
        <h1 class="text-center">Edit User</h1>
        <?php 
            require_once '../includes/db_connect.php';
            $id = $_GET['id'];
            $data = "SELECT * FROM users WHERE id='$id' ";
            $read = $db->query($data);
            $row = $read->fetch_assoc();
        ?>
        <!-- From Close -->
        <div class="well">
          <form action="user_update.php?id=<?php echo $row['id']; ?>" method="POST">
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control" name="fullname"value="<?php echo $row['fullname']; ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
            </div>
            <button type="submit" class="btn btn-info">Update</button>
          </form>
        </div>
      </div>
      <!-- Form Close -->
      <?php include('../includes/right_side.php'); ?>

    </div>

    <?php include('../includes/footer.php'); ?>

  </body>
  </html>
