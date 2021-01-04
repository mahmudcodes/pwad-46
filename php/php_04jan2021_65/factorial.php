<form action="" method="post">
	<label for="">Type Number: </label>
	<input type="number" name="number"><br>
	<input type="submit" name="submit" value="Get Factorial">
</form>
<?php 
	if (isset($_POST['submit'])) {
		
		
		$number = $_POST['number'];
		
		$factorial = 1;  
		
		for ($x=$number; $x>=1; $x--){  
		
		  $factorial = $factorial * $x;  

		}  
		
		echo "<b>Factorial of $number </b>is $factorial";
	}
?>