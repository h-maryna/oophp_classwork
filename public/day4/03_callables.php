<?php

$func = function(){
	return 'Hello, World!';
}; // consider it to regular statement

function myTest(){
    return '<p>Hello, World, Again!</p> ';
}
if(is_callable($func)){
	echo '<p>func is a callable!</p>';
} else {
	echo '<p>func is not callable</p>';
}

if(is_callable('myTest')){
	echo '<p>My test is a callable!</p>';
} else {
	echo '<p>func is not callable</p>';
}

echo myTest();
echo $func();

// or we can call user function
echo call_user_func('myTest');

function doSomething(Callable $some_func){
	if(is_callable($some_func)){
	call_user_func($some_func);
} else {
	throw new Exception('Hey, please pass a function');
  }
}

doSomething(function(){
    echo 'I am being passed as a parameter';
});



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



</body>
</html>