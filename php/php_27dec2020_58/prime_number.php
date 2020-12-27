

<form action="" method="post">
	<label for="">Enter Number: </label>
	<input type="text" name="number"><br>
	<input type="submit" value="Submit" name="submit">
</form>
<?php
	if($_POST){
		$number = $_POST['number'];
		for($i = 2; $i <= $number - 1; $i++){
			if($number % $i == 0){
				$value = True;
			}
		}
		if(isset($value) && $value){
				echo "Number " . $number . " is prime";
			}
			else{
				echo "Number " . $number . " is not prime";
			}
	}
?>