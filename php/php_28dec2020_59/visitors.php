<?php
	class Visitor{
		private static $visitors = 1;
		function __construct(){
			self::$visitors++;
		}
		static function getVisitors(){
			return self::$visitors;
		}
	}
	$visits = new Visitor();
	
	

	echo Visitor::getVisitors()."<br>";
?>