<?php

/**
 * Demonstrates chaining methods
 */
class CalculatorPlus
{
	private $total =0;
	private $tape = ''; // string
	public function add($num)
	{
		$this->total +=$num;
		$this->tape .= __FUNCTION__ . ' ' . $num . "\n";
		return $this; // returning object
	}
    
    public function subtract($num)
    {
        $this->total -=$num;
        $this->tape .= __FUNCTION__ . ' ' . $num . "\n";
		return $this;
    }

    public function multiply($num)
    {
        $this->total *=$num;
        $this->tape .= __FUNCTION__ . ' by ' . $num . "\n";
		return $this;
    }
    
    public function divide($num)
    {
        $this->total /=$num;
        $this->tape .= __FUNCTION__ . ' by ' . $num . "\n";
		return $this;
    }

	public function get()
	{
		return $this->total;
	}

	public function getTape()
	{
		return $this->tape .  
		'Total: ' . $this->total;
	}
}