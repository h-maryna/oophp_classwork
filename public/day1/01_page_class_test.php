<?php



$title = 'Page Class Test';

// WE must include
require __DIR__ . '/../../classes/Page.php';
require __DIR__ . '/../../config/config.php';

// We use the 'new' keyword to create an object from a class
$page1 = new Page();

$page1->title = 'About us';

//var_dump($page1);
// -> :: scope resolution operators

// add another operator
$page1->content = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title></title>
</head>
<body>

<h1><?=$page1->title?></h1>
    <?=$page1->content?>



</body>
</html>