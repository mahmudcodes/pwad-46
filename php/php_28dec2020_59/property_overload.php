<?php
class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();
 
    public function __set($name, $value)
    {
        echo "Setting '$name' Property to '$value'\n";
        $this->data[$name] = $value;
    }
 
    public function __get($name)
    {
        echo "Getting '$name' Property with Value : ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }
 
}
 
 
$obj = new PropertyTest;
echo "<pre>";

$obj->a = "Mahmud Hasan";
echo $obj->a . "\n";
$obj->b = "Eliyas Akondo";
echo $obj->b . "\n";

print_r($obj);

?>