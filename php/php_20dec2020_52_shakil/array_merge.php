<?php

$face = array("hi","welcome","every","gentleman");
$number = array(1,5,6,7);
$states = array("shakil","siam","ismail","shakib");
$merged = array_merge($number,$states,$face);//it makes one array..
echo "<pre>";
print_r($merged);
?>