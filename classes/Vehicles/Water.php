<?php 

namespace classes\Vehicles;

use classes\Vehicles\Vehicle;

abstract class Water extends Vehicle
{
	public function __construct($type)
	{
		parent::__construct($type);
	}

	public function liftAnchor()
	{
		var_dump('LIFTING ANCHORS!');
	}
}