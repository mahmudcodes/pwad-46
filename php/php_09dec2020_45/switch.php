<form action="" method="post">
	<label for="">Number : </label>
	<input type="number" name="number"><br>
	<input type="submit" value="Submit">
</form>
<?php
	$a = $_POST['number'];
	switch ($a) {
		case ($a>4):
			echo "Pass";
			break;
		case ($a>6):
			echo "Very Good";
			break;
		case ($a>8):
			echo "Excellent";
			break;
		default:
			echo "Fail";
	}
?>