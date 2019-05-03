<?php 

namespace classes\Vehicles;

use classes\Vehicles\Winged;

class Plane extends Winged
{
	public function __construct($type)
	{
	parent::__construct($type);
	}
    
    public function move()
    {
    	var_dump('INCREASE INGINE THRUST');
    }
	public function takeOff()
	{
	var_dump("Flaps up!");
	}
}