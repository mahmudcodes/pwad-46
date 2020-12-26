<?php
class oop{
private $name;
 public function __construct($val){
     return $this->name=$val;
 }
 public function sayHello(){
     echo "Hello World";
 }
  
 public function __destruct(){
     echo "<br>Bye bye $this->name!";
 }
 
}
$obj=new oop("Imran");
 
echo "<br>";
 
$obj->sayHello();
 
?>