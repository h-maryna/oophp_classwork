<?php

require __DIR__ . '/../config.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../routes.php';


try {
	
    $app = new App\App();
    $app->run();
} catch (Exception $e){
	echo $e->getMessage();
	echo '<pre>';
	print_r($e->getTrace());
	echo '</pre>';
	die;
}