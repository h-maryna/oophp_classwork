<?php

require __DIR__ . '/../../classes/Vehicles/Vehicle.php';
require __DIR__ . '/../../classes/Vehicles/Wheeled.php';
require __DIR__ . '/../../classes/Vehicles/Winged.php';
require __DIR__ . '/../../classes/Vehicles/Water.php';
require __DIR__ . '/../../classes/Vehicles/Car.php';
require __DIR__ . '/../../classes/Vehicles/Bike.php';
require __DIR__ . '/../../classes/Vehicles/Plane.php';
require __DIR__ . '/../../classes/Vehicles/Helicopter.php';
require __DIR__ . '/../../classes/Vehicles/Ship.php';
require __DIR__ . '/../../classes/Vehicles/Submarine.php';
require __DIR__ . '/../../classes/Calculator.php';


$jet = new Plane('Jet'); // plane, winged, vehicle
$bell = new Helicopter('Helicopter'); // helicopter, winged, vehicle
$honda = new Car('Car'); // wheeled
$trek = new Bike('Mountain Bike');
$floating_hotel = new Ship('Cruise Type');
$nautilus = new Submarine('Submarine');
$calk = new Calculator('Calculator');

var_dump('PARENT CLASSES LOADED!');
var_dump($jet); 
var_dump($bell);
var_dump($honda);
var_dump($trek);
var_dump($floating_hotel);
var_dump($nautilus);

// Type Hinting

function type(Vehicle $vehicle) // must be a plane
{
	return $vehicle->getType();
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