<?php

$cities = array("dhaka","barisal","khulna","sylhet","chattrogram","rajshahi");
echo "<pre>";
$subcities = array_splice($cities,-3,-1,array("comilla","jessore"));//it contains also removal value and sliced value.
print_r($cities);//removal value
print_r($subcities);//sliced value

?>