<title>Array Search</title>
<?php 
	$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibandha", "Amir"=>"Chapainawabganj");
	while($name = key($students)){
		echo $name."<br>";
		next($students);
	}
?>