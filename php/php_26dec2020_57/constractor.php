<?php
class oop{
 public function __construct(){
     echo "Welcome to PHP World!";
 }
 public function sayHello(){
     echo "Hello World";
 }
  
 
}
$obj=new oop; /* Now Automatically Execute __construct Method
                  And Will show "Welcome to PHP World " First.*/
 
echo "<br>";
 
$obj->sayHello(); // Result: Hello World
 
?>