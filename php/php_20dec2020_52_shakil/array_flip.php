<?php

$states = array("shakil"=>50,"siam"=>60,"ismail"=>40,"shakib"=>80);

echo "<pre>";
print_r($states);

$flipped = array_flip($states);//its exchange between index and value...
print_r($flipped);
?>

