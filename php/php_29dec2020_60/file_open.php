<?php 
$fh = fopen('mytext.txt', 'r');


while (!feof($fh)){
	echo fgets($fh)."<br>";
}
fclose($fh);


 ?>