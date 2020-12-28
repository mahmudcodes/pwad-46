<?php
class BaseClass {
   public function test() {
       echo "BaseClass::test() called\n";
   }
   
    public function moreTesting() {
       echo "This is method from parent class <br>";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "This is method from child class <br>";
   }
}
$obj = new BaseClass;
$obj->moreTesting();

$obj = new ChildClass;
$obj->moreTesting();
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?>