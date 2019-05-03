<?php

require __DIR__ . '/../../classes/Page3.php';
require __DIR__ . '/../../config/config.php';
$content = '<ul>
   <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
   <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
   <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
   <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
</ul> ';
$title = 'Support';

$page3 = new Page3($title, $content); // without this arguments gives warning it's expecting them

$new_title = 'New Title';

$new_content = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
 
$page3->setTitle($new_title); // setters never return value
$page3->setContent($new_content); 

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title><?=$page3->title()?></title>
</head>
<body>

<h1><?=$page3->title()?></h1>
    <?=$page3->content()?>

 



</body>
</html>