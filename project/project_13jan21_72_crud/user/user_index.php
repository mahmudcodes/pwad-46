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
      <h1 class="text-center">All Users</h1>

      <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success'){ ?>
        <div class="alert alert-success">
          <strong>Successfully!</strong> New user created...
        </div>
      <?php } ?>

      <?php if(isset($_GET['msg']) && $_GET['msg'] == 'update_success'){ ?>
        <div class="alert alert-success">
          <strong>Successfully!</strong> User updated...
        </div>
      <?php } ?>

      <?php if(isset($_GET['msg']) && $_GET['msg'] == 'delete_success'){ ?>
        <div class="alert alert-danger">
          <strong>Successfully!</strong> User deleted...
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      <?php } ?>
      

      <?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'){ ?>
        <div class="alert alert-warning">
          <strong>Warning!</strong> Something wrong...
        </div>
      <?php } ?>

      <a href="user_create.php" class="btn btn-success">Create User</a>
      <hr>
      <div class="">
        <table class="table table-bordered table-hover">
          <thead>
            <tr class="bg-info">
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('includes/db_connect.php');
              $data = "SELECT * FROM users";
              $read = $db->query($data);

             if($read->num_rows > 0){ 
               while($row = $read->fetch_assoc()){ ?>
            
            <tr>
              <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['fullname']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td>
                <a href="user_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a> |
                <a href="user_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
      <?php     } 
         } else{ ?>
            <td colspan="5" class="text-center text-primary"> NO data available !!</td>
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