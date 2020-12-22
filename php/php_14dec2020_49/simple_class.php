<?php
	class simpleClass{ 
		private $x = 10;
		public $y = 20;
		const z = 1000;
		static public $s = "I am static";
		public function display(){
			echo "X is: ".$this->x.",<br>Y is: ".$this->y;
			echo "<br>";
			echo self::z;
			echo "<br>";
			echo self::$s;
		}
	}
	$obj = new simpleClass;
	$obj2 = new simpleClass;
	//echo $obj->x;
	//echo "<br>".$obj2->y;
	$obj->display();
	//echo $obj::z;
?>