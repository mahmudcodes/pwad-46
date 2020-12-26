<?php 
	class SimpleClass{
		public $var = 'This is a property with variable';
		public const a = "This is a property with constant";
		
		public static function sayHello(){
			echo "Function SayHello Inside";
			echo "<br>";
			echo SimpleClass::a;
		}
	}
	$obj = new SimpleClass;
	echo $obj->var;
	echo "<br>";
	SimpleClass::sayHello();
	echo "<br>";
	echo SimpleClass::a;
?>