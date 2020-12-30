<?php  
// require_once("books.class.php");
// require_once("employees.class.php");

function __autoload($class){
	require_once("$class.class.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
	$obj1 = new books;
	echo $obj1->name;

	echo "<br>";

	$emp1 = new employees;
	echo $emp1->name;
	echo "<br>";

	$skl = new id("1262896");
	?>
</body>
</html>