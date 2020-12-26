<?php 
	class oop{
		public static $val;
		public static function init($a){
			return self::$val=$a;
		}

	}
	echo oop::init(25);
?>