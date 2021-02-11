<?php  
	$conn = new mysqli("localhost", "root", "", "evidence_11feb21");
	$sql = "SELECT * FROM divisions";
	$data = $conn->query($sql);
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Divisions</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-8 offset-2">
				<h2 class="text-info">Division Information</h2>
				<form action="" method="">
					<div class="form-row">
						<div class="col-lg-2">
							<div class="form-group">
								<label for="">Division: </label>
								<select name="" id="divisions" class="form-control">
									<option>Select</option>
									<?php while($row = $data->fetch_assoc()){ ?>
										<option value="<?php echo $row['div_id']; ?>"><?php echo $row['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="form-group">
								<label for="">District: </label>
								<select name="" id="districts" class="form-control">
									<option>Select</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function (){
			$("#divisions").change(function(){
				var division = $("#divisions").val();
				
				$.get('districts.php', {division:division}, function(data){
					$("#districts").html(data);
				});
			});
		});
	</script>
</body>
</html>