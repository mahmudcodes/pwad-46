<!-- <a href="super_global.php?id=50&name=amir">Click Here</a> -->
<?php
	// echo "Document Root : ".$_SERVER['DOCUMENT_ROOT'];
	// echo "<br>";
	// echo "User Agent : ".$_SERVER['HTTP_USER_AGENT'];
	// echo "<br>";
	// echo "IP Address : ".$_SERVER['REMOTE_ADDR'];
	// echo "<br>";
	// echo "REF Address : ".$_SERVER['HTTP_REFERER'];
	// echo "<br>";
	// echo "Request File : ".$_SERVER['REQUEST_URI'];
	// echo "<br>";
	
	// $id = $_GET['id'];
	// $name = $_GET['name'];
	// echo "<br>".$id."<br>";
	// echo $name;
	
	// $_GET['age'] = 25;
	// echo "<pre>";
	// print_r($_GET);
?>

<form action="" method="post">
	<label for="">Name : </label>
	<input type="text" name="name"><br>
	<label for="">Age</label>
	<input type="number" name="age"><br>
	<input type="submit" value="Submit">
</form>

<?php
	print_r($_POST);
	// $name = $_GET['name']; 
	// $age = $_GET['age'];
	// echo "<pre>Name is : ".$name."<br>Age is : ".$age."</pre>";
?>