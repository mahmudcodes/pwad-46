<?

$cities = array("dhaka","barisal","khulna","sylhet","chattrogram","rajshahi");
$subcities = array("dhaka","bsl","khulna","sylhet","ctrm","rajshahi");
echo "<pre>";
$differ = array_diff($cities,$subcities);//defines differ from cities..n
print_r($differ);


?>