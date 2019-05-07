<?php


	require __DIR__ . '/../../config.php';

	use classes\Vehicles\Truck;

try{

	$truck = new Truck('Truck');

	var_dump($truck);

	$truck->test();

} catch(classes\Vehicles\Exceptions\WheeledException $e) {
	echo 'Wheeled Exception!';
	echo $e->getMessage();
} catch(classes\Vehicles\Exceptions\WingedException $e) {
	echo 'Winged Exception!';
	echo $e->getMessage();
} catch(classes\Vehicles\Exceptions\WaterException $e) {
	echo 'Water Exception!';
	echo $e->getMessage();
} catch(\PDOException $e) {
	echo 'PDO Exception!';
	echo $e->getMessage();
} catch(Exception $e) {
    echo 'Regular Exception!';
	echo $e->getMessage();
} finally {
	echo '<br /> We are done!';
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



</body>
</html>