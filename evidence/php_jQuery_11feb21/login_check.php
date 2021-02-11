<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$email = $_POST['email'];  
		$password = $_POST['password']; 
		$password = md5($password); 
		$conn = new mysqli("localhost", "root", "", "evidence_11feb21");
		$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
		$data = $conn->query($sql);
		$row = $data->fetch_assoc();
		if($conn->affected_rows > 0){ ?>
			<div class="alert alert-success">
			  <strong>Successfully!</strong> log in. Welcome <b><?php echo $row['name']; ?></b>
			</div>
	<?php	}
		else{ ?>
			<div class="alert alert-warning">
			  <strong>Warning!</strong> Email or Password Wrong.
			</div>
	<?php
			}
		}
	?>