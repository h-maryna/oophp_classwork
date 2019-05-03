<?php

require __DIR__ . '/../../classes/User.php';
require __DIR__ . '/../../classes/Student.php';
require __DIR__ . '/../../config/config.php';
/**
 * 
 */
$sally = new Student('Sally', 'sally@example.com', '234567890');

$string_sally = serialize($sally);
var_dump($string_sally);

// we are unserialize sally, thus
// invoking the __wake method
$new_sally = unserialize($string_sally);
var_dump($new_sally);

echo '<hr />';
echo $sally; // I am a sudent my name is Sally

echo '<hr />';
// we are treating sally like a function
echo $sally(); // I have been invoked

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<title>Magic Methods</title>
</head>
<body>

<h1></h1>



</body>
</html>