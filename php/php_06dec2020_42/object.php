<?php
	class Appliance{
		private $_power;
		function setPower($status){
			$this->_power = $status;
		}
	}
	$object = new Appliance;
	$object->setPower(100);
	print_r($object);
?>