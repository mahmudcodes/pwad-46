<?php
	if($_SERVER['REQUEST_METHOD']=="GET"){
		$division = $_GET['division'];  
		$conn = new mysqli("localhost", "root", "", "evidence_11feb21");
		$sql = "SELECT * FROM districts WHERE div_id = '$division' ";
		$data = $conn->query($sql);
?>
	<option>Select</option>
<?php
		while($row = $data->fetch_assoc()){ 
?> 
	<option value="<?php echo $row['div_id']; ?>"><?php echo $row['name']; ?></option>

<?php } } ?>