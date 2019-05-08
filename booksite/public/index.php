<?php

// Session start
ob_start();

session_start();

$env = 'dev';

if($env == 'dev'){
	//show errors in browser
   ini_set('display_errors', 1);

   //Show every kind of error, even warnings
   ini_set('error_reporting', E_ALL);
} else{
	ini_set('display_errors', 0);
}


$config = require __DIR__ . '/../config.php';
require __DIR__ . '/../vendor/autoload.php';


try {
	
	$c = new Pimple\Container($config); // IoC Container
	$c['dbh'] = function() use($c) {
        return new \PDO($c['db_dns'], $c['db_user'], $c['db_pass']);
	};
    
    $app = new App\App($c);
    $app->run();
} catch (Exception $e){
	echo $e->getMessage();
	echo '<pre>';
	print_r($e->getTrace());
	echo '</pre>';
	die;
}