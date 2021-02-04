<?php  
if(isset($_GET['what'])){
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	

<table class="table table-bordered m-5" style="width:92%;">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Mobile</th>
		<th>Gender</th>
	</tr>';



	if($_GET['what']){
		$data = $_GET['what'];
	}
	$conn = new mysqli('localhost', 'root', '', 'pwad_46');
		
		$sql = "SELECT * FROM student_info where status = '$data' ";
		$result = $conn->query($sql);
		
		while($row = $result->fetch_assoc()){

		echo "<tr>
			<td> ". $row['id']." </td>
			<td> ". $row['name'] ."</td>
			<td> ". $row['email'] ."</td>
			<td> ". $row['mobile']." </td>
			<td> ". $row['gender'] ."</td>
		</tr>";
	 } 
	
	echo '</table>
	</body>
		</html>';
}
else{
	echo "Nothing Here !!";
}
 ?>
