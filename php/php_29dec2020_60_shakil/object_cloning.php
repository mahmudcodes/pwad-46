<?php
class Employee {
 private $name;
 function setName($name) {
 $this->name = $name;
 }
 function getName() {
 return $this->name;
 }
}
$emp1 = new Employee();
$emp1->setName('shakil khan');
$emp2 = clone $emp1;
$emp2->setName('abdul alim');
echo "Employee 1 = {$emp1->getName()}<br>";
echo "Employee 2 = {$emp2->getName()}";
?>