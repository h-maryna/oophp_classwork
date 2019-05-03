<?php

require __DIR__ . '/../../config.php';


$jet = new classes\Vehicles\Plane('Jet'); // plane, winged, vehicle
$bell = new classes\Vehicles\Helicopter('Helicopter'); // helicopter, winged, vehicle
$honda = new classes\Vehicles\Car('Car'); // wheeled
$trek = new classes\Vehicles\Bike('Mountain Bike');
$floating_hotel = new classes\Vehicles\Ship('Cruise Type');
$nautilus = new classes\Vehicles\Submarine('Submarine');

var_dump('PARENT CLASSES LOADED!');
var_dump($jet); 
var_dump($bell);
var_dump($honda);
var_dump($trek);
var_dump($floating_hotel);
var_dump($nautilus);

// Type Hinting

function type(classes\Vehicles\Vehicle $a) // must be a plane
{
	return $a->getType();
}
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
<p><?=type($jet)?></p>
<p><?=type($bell)?></p>
<p><?=type($honda)?></p>
<p><?=type($trek)?></p>
<p><?=type($floating_hotel)?></p>
<p><?=type($nautilus)?></p>



</body>
</html>