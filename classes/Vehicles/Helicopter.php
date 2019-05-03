<?php 

namespace classes\Vehicles;

use classes\Vehicles\Winged;

class Helicopter extends Winged
{
	public function __construct($type)
	{
	parent::__construct($type);
	}

	public function takeOff()
	{
	var_dump("ASCEND!");
	}
}