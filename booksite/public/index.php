<?php

require __DIR__ . '/../config.php';
require __DIR__ . '/../vendor/autoload.php';


try {
	
    $app = new App\App();
} catch (Exception $e){
	echo $e->getMessage();
	echo '<pre>';
	print_r($e->getTrace());
	echo '</pre>';
	die;
}