<?php $conn = new mysqli("localhost", "root", "", "pwad_46"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<title>তথ্য</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 mt-5">
				<h2 class="text-center mb-5 text-info">বিস্তারিত তথ্যাদি</h2>
				<table class="table text-primary text-center table-bordered">
					<tr>
						<td>আইডি</td>
						<td>নাম</td>
						<td>ইমেইল</td>
						<td>মোবাইল</td>
						<td>লিঙ্গ</td>
						<td>এলাকা</td>
						<td>জেলা</td>
						<td>Action</td>
					</tr>
					<?php
						if(isset($_GET['del'])){
							$del = $_GET['del'];
							$que = "DELETE FROM student_info WHERE id='$del' ";
							$delete = $conn->query($que);
							if($delete){
								echo "<p class='text-success'>Deleted Successfully!<p>";
							}
							else{
								echo "<p class='text-danger'>Something Wrong!<p>";
							}
						}
					?>

					<?php 
					
					$query = "SELECT * FROM student_details_view";
					$result = $conn->query($query);
					if($result){
						while($row = $result->fetch_assoc()){
						//$row = $result->fetch_object()
					?>

					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['mobile']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['road_area']; ?></td>
						<td><?php echo $row['district']; ?></td>
						<td>
							<a onclick="return confirm('Are you want to delete?');" href="?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					
					<?php } } ?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>