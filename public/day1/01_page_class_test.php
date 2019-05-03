<?php

require __DIR__ . '/../../config.php';

// We must include the class if we want to use it
require __DIR__ . '/../../classes/Page.php';


// We use the 'new' keyword to create an object from a class
$page1 = new Page();

// Add an attribute
$page1->title = 'About us';

// -> :: scope resulution operators

// Add another attribute
$page1->content = '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>';


?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?=$page1->title?></title>
</head>
<body>

	<h1><?=$page1->title?></h1>

	<?=$page1->content?>


</body>
</html>