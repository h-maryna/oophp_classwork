<?php

namespace classes;
abstract class TestMath
{   
	/**
	 * Full fucntion can be used as is, or overidden in child classes
	 * @param  [type] $a [description]
	 * @param  [type] $b [description]
	 * @return [type]    [description]
	 */
	public function sum($a,$b)
	{
		return $a + $b;
	}

	/**
	 * Full function must be used as is, or overidden in child classes
	 * @param  [type] $a [description]
	 * @param  [type] $b [description]
	 * @return [type]    [description]
	 */
	public abstract function subsract($a,$b);

}