<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
	.rest{
		display: none;
	}
	.rest option{
		color: red;
	}
	#results{
		display: none;
	}
</style>
<?php  
	$conn = new mysqli("localhost", "root", "", "mycompany");
		$query = "SELECT * FROM batches";
		$result = $conn->query($query);
?>
<form action="">
	<div class="input-group col-lg-2">
		<label class="label">Select Round: </label>
		<select name="batch" id="batch" class="form-control">
			<option value="">Select</option>
			<?php while($row = $result->fetch_assoc() ){ ?>
				<option value="<?php echo $row['round']; ?>"><?php echo $row['round']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="rest">
		<label for="" id="rest">Name: </label>
		<select name="" id="res">
			
		</select>
	</div>
	<input type="button" value="New" id="new">
</form>
<div id="results"></div>

<script src="../jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#batch").change(function(){
				if($(this).val() != ""){
					$.get(
						'test.php',
						{ what : $(this).val() },
						function(data){
							$("#res").html(data);
						}
					);
					//alert("Selected: " + $(this).val() );
				}
				else{
					$("#res").html("No Data Selected");
				}
			});

			$("#batch").change(function(){
				$(".rest").show();
				$(".rest").css('display', 'inline');
				//$("#res").show();
			});
			$("#new").click(function(){
				$("#results").show();
				$("#results").load('new_batch.php');
			});
			$("#newRound").click(function(){
				
				alert("test");
			});
		});
	</script>