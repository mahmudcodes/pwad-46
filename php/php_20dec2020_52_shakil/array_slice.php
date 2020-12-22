<?php

$cities = array("dhaka","barisal","khulna","sylhet","chattrogram","rajshahi");
echo "<pre>";
$subcities = array_slice($cities,3);
print_r($subcities);
?>
<?php

$cities = array("dhaka","barisal","khulna","sylhet","chattrogram","rajshahi");
echo "<pre>";
$subcities = array_slice($cities,-2);//it take by -2
print_r($subcities);
?>
<?php

$cities = array("dhaka","barisal","khulna","sylhet","chattrogram","rajshahi");
echo "<pre>";
$subcities = array_slice($cities,2,-3);//it remove by -3
print_r($subcities);
?>