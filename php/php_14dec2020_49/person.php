<?php 
	class Person{
		public $name = "";
		public $age = "";
		public function setName($name=""){
			$this->name = $name;
		}
		public function setAge($age="20"){
			$this->age = $age;
		}
		public function getInfo(){
			echo "My name is ".$this->name." and my age is ".$this->age." years.";
		}
	}
	$obj = new Person;
	$obj->setName("Hasan");
	$obj->setAge("25");
	echo "<pre>";
	print_r($obj);
	$obj->getInfo();
	echo "<hr>";
	$person2 = new Person;
	$person2->setName("Alim");
	$person2->setAge(18);
	$person2->getInfo();
?>