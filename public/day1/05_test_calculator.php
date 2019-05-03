<?php

$title = 'Testing Calculator_Plus';
require __DIR__ . '/../../classes/CalculatorPlus.php';
require __DIR__ . '/../../config/config.php';

$num1 = 5;
$num2 = 3;

$calc = new CalculatorPlus();

var_dump($calc);

var_dump($calc->add(2));

//$total = $calc->add(2)->add(5)->add(8);

var_dump($calc->add(2)->add(5)->add(8));

$calc2 = new CalculatorPlus();

$total = $calc2->add(5)
              ->add(7)
              ->add(9)
              ->get(); // acn create as many calculators as I want
var_dump($total);

$calc3 = new CalculatorPlus();
$total3 = $calc3->add(2)
                ->multiply(4)
                ->multiply(4)
                ->subtract(5)
                ->divide(2)
                ->get();
var_dump($total3);

var_dump($calc3->getTape());

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title></title>
</head>
<body>

<h1></h1>



</body>
</html>
