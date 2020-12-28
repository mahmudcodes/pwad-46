<?php
class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();
 
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'<br>";
        $this->data[$name] = $value;
    }
 
    public function __get($name)
    {
         echo "Getting '$name' Property with Value : ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }
     
    public function __isset($name)
    {
        echo "Is '$name' Property set?<br>";
        echo isset($this->data[$name])?"Yes '$name' Property is set":"No '$name' Property is Not set";
        echo "<br>";
    }
 
    public function __unset($name)
    {
        echo "Unsetting '$name'<br>";
        unset($this->data[$name]);
    }
 
}
 
 
$obj = new PropertyTest;
 
$obj->a = "Masud Alam";
echo $obj->a . "<br>";
echo isset($obj->a);
unset($obj->a);
echo isset($obj->a);
echo "<br>";
 
?>