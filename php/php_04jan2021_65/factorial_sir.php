<form action="" method="post">
	<label for="">Type Number: </label>
	<input type="number" name="number"><br>
	<input type="submit" name="submit" value="Get Factorial">
</form>
<?php 
	if (isset($_POST['submit'])) {
		
		
		$number = $_POST['number'];
		function factorial($n){
			if($n === 0){
				return 1;
			}
			return $n * factorial($n-1);
		}
		echo "$number factorial is " . factorial($number);
	}
?>