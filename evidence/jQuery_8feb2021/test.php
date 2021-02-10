<?php
			if(isset($_GET['what'])){  
		$info = $_GET['what'];
		$conn = new mysqli("localhost", "root", "", "mycompany");
		$query = "SELECT * FROM students WHERE round = '$info' ";
		$result = $conn->query($query);

	?>
		
<?php while($row = $result->fetch_assoc() ){ ?>
	<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
<?php } } ?>