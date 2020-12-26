<?php 
	class SimpleClass{
		public $name = "Mahmud Hasan";
		public $age = 25;
		public $address = "Paltan";

		public function Contact(){
			$n = $this->name;
			$a = $this->age;
			$ad = $this->address;
			return "Name: " . $n . "<br>Age: " . $a . "<br>Address: " . $ad;
		}
	}
	$objHandler = new SimpleClass;
	echo $objHandler->Contact() . "<hr>";

	$object2 = new SimpleClass;
	$object2->name = "Shakib Mahmud";
	$object2->age = "23";
	$object2->address = "Mirpur-10";
	echo $object2->Contact();
?>