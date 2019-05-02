<?php

require __DIR__ . '/../../classes/Page2.php';
require __DIR__ . '/../../config/config.php';

// create a new object from Page2 class
$page2 = new Page2();

/*
echo '<pre>';

var_dump($page2);

echo '<hr />';

print_r($page2);

echo '</pre>'; */

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title><?=$page2->title()?></title>
</head>
<body>

<h1><?=$page2->title()?></h1>
    <?=$page2->content()?>


</body>
</html>