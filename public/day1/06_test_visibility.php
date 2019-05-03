<?php

require __DIR__ . '/../../classes/User.php';
require __DIR__ . '/../../config/config.php';

$dave = new User('Dave', 'dave@example.com');


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

<p>Name: <?=$dave->name?></p>
<!-- must use public getter method -->
<p>Email: <?=$dave->getEmail()?></p>

<p>User Id: <?=false//$dave->user_id//?></p>

<!-- When accessing static attributes within
	an instantiated object, we use the scope
	resolution operator 
	as well as a $sign in front of the 
    attribute name -->

<p>Type: <?=$dave::$type?></p>
<!-- we can access static attributes as long as they are public) from the outside a class, by use the class name, the scope resolution operator, and the name of the attribute (with a $ sign)-->

<p>Type2: <?=User::$type?></p>

</body>
</html>