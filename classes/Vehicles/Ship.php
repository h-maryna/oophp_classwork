<?php 

namespace classes\Vehicles;

use classes\Vehicles\Water;

class Ship extends Water
{
	public function __construct($type)
	{
	parent::__construct($type);
	}

	public function move()
	{
	var_dump("INCREASE PROPELLAR SPEED");
	}
}