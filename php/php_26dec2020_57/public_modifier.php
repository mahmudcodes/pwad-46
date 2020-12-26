<?php
class GrandFather
{
    public $name='Masud Alam<br>';  // A public variable
    public function getName(){
      return $this->name;
    }
}
 
class Daddy extends GrandFather // Inherited class
{
    function displayGrandFaName()
    {
        return $this->name; // The public variable will be available to the inherited class
    }
 
}
 
$grandFa=new GrandFather;
 
echo $grandFa->getName(),"\n";
 
// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy;
echo $daddy->displayGrandFaName(),"\n"; // Prints 'Masud Alam'
 
// Public variables can also be accessed outside of the class!
$outsiderWantstoKnowGrandpasName = new GrandFather;
echo $outsiderWantstoKnowGrandpasName->name; // Prints 'Masud Alam
 
?>