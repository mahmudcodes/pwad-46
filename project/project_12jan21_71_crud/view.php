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
  <title>All User</title>
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
          <h2>CRUD | <b>All User</b></h2>
        </div>
        <div class="col-sm-3 right">
          <a href="create.php" class="btn btn-success">
            <img src="add.svg" alt="Add"> Create User
          </a>
            </div>
          </div>
        </div>
        <div class="alert alert-success" role="alert">
          Successfully! New User Created...
        </div>
        <div class="table-responsive">
          <?php
          $sql = "SELECT * FROM users";
          $data = $db->query($sql);
          ?>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
                <th scope="col">Age</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $data->fetch_assoc()) {

                ?>
                <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['location']; ?></td>
                  <td><?php echo $row['age']; ?></td>
                  <td><?php echo $row['salary']; ?></td>
                  <td>
                    <a href="" class="btn btn-primary">
                      <img src="view.svg" alt="View"> View
                    </a> |
                    <a href="" class="btn btn-info">
                      <img src="edit.svg" alt="Edit"> Edit
                    </a> |
                    <a href="" class="btn btn-danger">
                      <img src="delete.svg" alt="Delete"> Delete
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </body>
  </html>