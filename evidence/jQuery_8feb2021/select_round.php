<?php  
	$conn = new mysqli("localhost", "root", "", "mycompany");
	$sql = "SELECT * FROM batches"
	$sql = $conn->query($sql);
?>
<select name="" id="">
	<option value="">Select</option>
</select>