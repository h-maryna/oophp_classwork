<?php

ob_start();
session_start();
// define your base path
define('BASE_PATH', __DIR__);


define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DSN', 'mysql:host=localhost;dbname=booksite');

$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//show errors in browser
ini_set('display_errors', 1);

//Show every kind of error, even warnings
ini_set('error_reporting', E_ALL);