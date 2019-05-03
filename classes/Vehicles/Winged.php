<?php 

namespace classes\Vehicles;

use classes\Vehicles\Vehicle;

abstract class Winged extends Vehicle
{
	public function __construct($type)
	{
		parent::__construct($type);
	}

	public function takeOff()
	{
		var_dump('Take OFF!');
	}
}