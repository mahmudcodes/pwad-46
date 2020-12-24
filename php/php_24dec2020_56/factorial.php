<!-- <?php 
	function factorialize($num) {
	  if ($num === 0 || $num === 1)
	    return 1;
	  for ($i = $num - 1; $i >= 1; $i--) {
	    $num *= $i;
	  }
	  return $num;
	}
	echo factorialize(0);
?> -->
<h3>Factorial Input</h3>
<form action="" name="myForm" method="post">
	<label for="">Number: </label>
	<input type="text" name="number"><br>
	<input type="button" value="Submit" onclick="myFunc()">
</form>
<script>
	function myFunc(){
		var get_num = parseInt(document.myForm.number.value);
		if(get_num == ""){
			alert("Enter the number");
		}
		else {
			function factorial(get_num){
				if(get_num === 0 || get_num === 1)
					return 1;
				for(var i=get_num-1; i>=1; i--){
					get_num *= i;
				}
				return get_num;
			}
			document.write("Factorial is: " + factorial(get_num));
		}
	}
</script>
<form action="" method="post">
	<input type="text" name="num">
	<input type="submit" value="Submit">
</form>
<?php 
	if(isset($_POST["num"])){
		$num = $_POST["num"];
		function factorial($num){
			if($num < 0)
				return -1;
			if($num == 0)
				return 1;
			return($num*factorial($num - 1));
		}
		echo "Factorial value is: " . factorial($num);
	}
?>