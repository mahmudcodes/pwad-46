<?php  
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$batch_id = $_POST['batch_id'];
		$round = $_POST['round'];
		$conn = new mysqli("localhost", "root", "", "mycompany");
		
		$sql = "INSERT INTO batches(batch_id, round) VALUES('$batch_id', '$round')";
		$conn->query($sql);
		if($conn->affected_rows > 0){
			echo "inserted";
		}
		else{
			echo "error";
		}
	}
?>
<form action="" method="post" id="tests">
	<label for="">Batch ID: </label>
	<input type="text" name="batch_id">
	<label for="">Round: </label>
	<input type="text" name="round">
	<input type="submit" value="Submit" id="newRound" name="submit">
</form>
<button id="btn">Click</button>
<p id="para">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Facilis accusamus voluptatum velit dolore, atque et iure vitae porro quis iste?</p>
<script src="../jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn").click(function(){
				$("#para").toggle();
			});
		});
	</script>