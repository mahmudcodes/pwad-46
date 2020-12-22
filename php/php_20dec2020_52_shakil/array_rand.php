<?

$cities = array("dhaka"=>1,"barisal"=>2,"khulna"=>3,"sylhet"=>4,"chattrogram"=>5,"rajshahi"=>6);
echo "<pre>";
$randomly = array_rand($cities,2);
print_r($randomly);
?>