<?php

namespace classes\Vehicles;



abstract class Vehicle
{
	private $type; // data hiding

	public function __construct($type)
	{
		$this->type = $type;
	}
	public function move()
	{
		return 'Roll forward';
	}
    
    /**
     * Final getType method cannot be overriden
     * in any child classes
     * @return   [<description>]
     */
	public final function getType()
	{
		return $this->type;
	}
}