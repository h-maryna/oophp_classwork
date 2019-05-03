<?php 

namespace classes\Vehicles;

use classes\Vehicles\Vehicle;


abstract class Wheeled extends Vehicle
{
	public function __construct($type)
	{
		parent::__construct($type);
	}

	public function brake()
	{
		var_dump('BREAK');
	}
}