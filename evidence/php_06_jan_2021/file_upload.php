<form action="" method="post" enctype="multipart/form-data">
  <label for="">File: </label>
  <input type="file" name="upload"><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php
  if(isset($_POST['submit'])){
    $file = $_FILES['upload'];
    
    $accept_file = array(
        'application/pdf',
        'application/msword',
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png'
    );
    if((!in_array($_FILES['upload']['type'], $accept_file)) && (!empty($_FILES["upload"]["type"]))){
      echo "<p>Invalid File type, must be PDF/Image/Document</p>";
    }
    else if ($_FILES["upload"]["size"] > 400000) {
      echo "<p>Sorry, your file is too large.</p>";
    }
    else{
      $tmpname = $_FILES['upload']['tmp_name'];
      $destination = "uploads/";
      $upload_file = $destination . basename($_FILES["upload"]["name"]);
      move_uploaded_file($tmpname, $upload_file);
      echo "<p>File uploaded Successfull</p>";
    }
  }
?>