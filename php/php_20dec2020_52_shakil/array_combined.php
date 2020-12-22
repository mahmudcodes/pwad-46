<?php

$abbr = array("DH","BR","KH","SL");
$cities = array("dhaka","barisal","khulna","sylhet");
echo "<pre>";
print_r(array_combine($cities,$abbr));//it makes abbr to index of cities..

?>