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
  <h2>Product Details</h2>
  
  <table class="table">
    <?php  
          if(isset($_GET['id'])){
            $id = $_GET['id'];
          $sql = "DELETE FROM manufacturer where id = '$id' ";
          $data = $conn->query($sql);
          if($data){
            echo $success;
          }
          else {
            echo $error;
          }
          }
          
    ?>  
    <thead>
      <tr>
        <th>ID:</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
      </tr>
    </thead>
    <tbody>
      <?php  
          $sql = "SELECT * FROM manufacturer";
          $data = $conn->query($sql);
          while($row = $data->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['contact_no']; ?></td>
        <td>
          <a href="?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr> 
      <?php } ?>     
    </tbody>
  </table>
</div>

</body>
</html>

