<?php

$states = array("shakil","siam","ismail","shakib");
echo "<pre>";

print_r($states);
asort($states);//it can not change index of value...
print_r($states);
rsort($states);
print_r($states);
?>

