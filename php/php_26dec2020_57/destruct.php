<?php
class oop{
 public function __construct(){
     echo "Welcome to PHP World!";
 }
 public function newHello(){
     echo "new Hello World<br>";
 }
 public function __destruct(){
     echo "<br>I'm about to disappear - bye bye!";
 }

 public function sayHello(){
     echo "Hello World";
 }
 
}
$obj=new oop;
 
echo "<br>";
 
$obj->newHello();
$obj->sayHello();
 
?>