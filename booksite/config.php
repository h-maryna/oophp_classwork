<?php

$settings = array (
	'site_name' => 'Booksite',
	'base_path' => __DIR__,
	'db_user' => 'root',
	'db_pass' => '',
	'db_dns' =>  'mysql:host=localhost;dbname=booksite',
	'view_path' => __DIR__ . '/app/Views',
	'routes_file' => __DIR__ . '/routes2.php'
);

return $settings;
