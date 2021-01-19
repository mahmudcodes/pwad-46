<?php $conn = new mysqli("localhost", "root","","company") ?>
<?php
			if(isset($_GET['del'])){ 
				$id = $_POST['del'];

				$sql = "SELECT * FROM manufacturer WHERE id= '$del' ";
				$result = $conn->query($sql);
				$rows = $result->fetch_assoc();
				if($rows){
					echo "Deleted Successfully !!";
				}
				else{
					echo "Something is Wrong !! ";
				}
			}
		?>