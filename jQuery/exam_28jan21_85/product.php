<?php $conn = new mysqli("localhost", "root", "", "exam_28jan21_85") ?>
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
    <thead>
      <tr>
        <th>ID:</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Manufacturer ID</th>
      </tr>
    </thead>
    <tbody>
      <?php  
          $sql = "SELECT * FROM product";
          $data = $conn->query($sql);
          while($row = $data->fetch_assoc()){
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['manufacturer_id']; ?></td>
      </tr> 
      <?php } ?>     
    </tbody>
  </table>
</div>

</body>
</html>

