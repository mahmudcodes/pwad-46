<?php
	class Employee{
		protected $name;
		protected $title;
		function __construct(){
			echo "Employee constructor called<br>";
		}
	}
	class Manager extends Employee{
		function __construct(){
			parent::__construct();
			echo "Manager constructor constructor<br>";
		}
	}
	$employee = new Manager();
?>