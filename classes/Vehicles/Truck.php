<?php 

namespace classes\Vehicles;

use classes\Vehicles\Wheeled;
use classes\Vehicles\Exceptions\WheeledException;


class Truck extends Wheeled
{
    
    use Traits\Start;
    use Traits\Stop;

	public function __construct($type)
	{
	parent::__construct($type);
	}

	public function move()
	{
	var_dump("PRESSING ACCELARATOR");
	}

	public function test()
	{   
		// you throw an exception and system catch it
		throw new WheeledException('There has been a Wheeled error!');
		//The next line with a PDO exception
		//$dbh = new \PDO('fsdfasd', 'sdaga', 'faswe');
	}

}