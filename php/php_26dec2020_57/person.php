<?php
	class person{
		private $name = "";
		private $age = "";
		public function setName($name=""){
			$this->name=$name;
			return $this;
		}
		public function setAge($age="23"){
			$this->age=$age;
			return $this;
		}
		public function getInfo(){
			echo "My Name is: " . $this->name . " and my age is: " . $this->age . " years.";
		}
	}
	$person = new person();
	$person->setName("Mahmud Hasan");
	$person->setAge();
	$person->getInfo();

	$person1 = new person();
	$person1->setName("Ismail Hossain")->setAge(30)->getInfo();
?>