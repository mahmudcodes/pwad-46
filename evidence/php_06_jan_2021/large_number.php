<form action="" method="post">
	<label>Number 1: </label>
	<input type="text" name="num1"><br>
	<label>Number 2: </label>
	<input type="text" name="num2"><br>
	<label>Number 3: </label>
	<input type="text" name="num3"><br>
	<input type="submit" value="Submit" name="submit">
</form>
<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num3 = $_POST['num3'];

		if($num1>$num2){
			echo "<p>Number between $num1, $num2, $num3 = $num1 is large.</p>";
		}
		elseif ($num2>$num3) {
			echo "<p>Number between $num1, $num2, $num3 = $num2 is large.</p>";
		}
		else{
			echo "<p>Number between $num1, $num2, $num3 = $num3 is large.</p>";
		}
	}
?>