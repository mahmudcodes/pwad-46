<form action="" method="post">
	<label for="">Number : </label>
	<input type="number" name="number"><br>
	<input type="submit" value="Submit">
</form>
<?php
	$check = $_POST['number'];
	if($check <= 4){
		echo "<h2 style='color: red;'>Bad Luck! You are Fail...<h2>";
	}
	elseif ($check <= 6) {
		echo "<h2 style='color: green;'>Congratulations! You are Pass...<h2>";
	}
	elseif ($check <= 8) {
		echo "<h2 style='color: #ddd;'>Congratulations! You are Very Good...<h2>";
	}
	elseif ($check <= 10) {
		echo "<h2 style='color: #ccc;'>Congratulations! You are Excellent...<h2>";
	}
	else{
		echo "<h2 style='color: #ccc;'>Sorry! You are Mad...<h2>";
	}
?>