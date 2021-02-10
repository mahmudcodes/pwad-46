<?php
	if(isset($_GET['what'])){  
		$info = $_GET['what'];
		$conn = new mysqli("localhost", "root", "", "mycompany");
		$query = "SELECT * FROM students WHERE round = '$info' ";
		$result = $conn->query($query);
	?>
	<table>
		<tr>
			<th>Name</th>
			<th>Course</th>
			<th>Round</th>
		</tr>
	<?php
		if($result){
			while($row = $result->fetch_assoc() ){
		?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['course']; ?></td>
			<td><?php echo $row['round']; ?></td>
		</tr>
		<?php 
				}
			}
			else{ ?>
				<td>No Data Available !!</td>
		<?php	}
		?>
	</table>
	<?php
		}
			else{
				echo "Something Wrong !!";
			}
	?>