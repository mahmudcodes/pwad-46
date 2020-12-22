<?php

$cities = array("dhaka"=>6,"barisal"=>5,"khulna"=>4,"sylhet"=>3,"chattrogram"=>2,"rajshahi"=>1);
echo "<pre>";
$randomly = array_rand($cities,3);
print_r($randomly);
?>