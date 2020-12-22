<?php

$states = array("shakil","siam","ismail","shakib");
echo "<pre>";

print_r(array_reverse($states));//rsort($states)..
?>

<?php

$number = array(12,354,35,353,235,23,633,65,432,35265,2,);
//sort($number);
echo "<pre>";
//print_r($number);
rsort($number);
print_r($number);
?>