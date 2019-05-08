<?php

require __DIR__ . '/../../config.php';

use classes\Vehicles\Truck;

$truck = new Truck('Truck');

echo $truck->startEngine(); // Vroom Vroom

echo $truck->stopEngine(); // Cough!

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