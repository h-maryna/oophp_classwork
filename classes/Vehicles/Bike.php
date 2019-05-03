<?php 

namespace classes\Vehicles;

use classes\Vehicles\Wheeled;

class Bike extends Wheeled
{
	public function __construct($type)
	{
	parent::__construct($type);
	}

	public function move()
	{
	var_dump("Pressing Acselarating");
	}
}