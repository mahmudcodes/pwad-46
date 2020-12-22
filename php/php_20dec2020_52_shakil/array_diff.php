<?php

$cities = array("dhaka","barisal","khulna","sylhet","chattrogram","rajshahi");
$subcities = array("dhaka","bari","khulna","sylhet","ctrm","rajshahi");
echo "<pre>";
$differ = array_diff($subcities,$cities);//defines differ from cities..n
print_r($differ);


?>