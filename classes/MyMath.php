<?php

namespace classes;

use \classes\TestMath;
class MyMath extends TestMath
{   
	/**
	 * Implementing abstract method from parent..
	 * We must implement all abstract methods or
	 * a fatal error will result
	 * 
	 * @param  [type] $a [description]
	 * @param  [type] $b [description]
	 * @return [type]    [description]
	 */
	
	public function subsract($a,$b)
	{
		return $a - $b;
	}
}