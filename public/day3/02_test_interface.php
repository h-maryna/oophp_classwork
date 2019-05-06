<?php

require __DIR__ .'/../../config.php';

use classes\ModelInterface as Model;
// Use the book model
use classes\Models\Book;
// Use the author model
use classes\Models\Author;
// Use the format model
use classes\Models\Format;
// Use the book model
use classes\Models\Genre;
// Use the book model
use classes\Models\Publisher;

// Instantiate a new Book model
$book = new Book;

$author = new Author;

$format = new Format;

$genre = new Genre;

$publisher = new Publisher;
// var_dump the $book object
//var_dump($book);

/**
 * Thos function demonstartes the principle of Polymotphism.
 * We will pass it objects based on five different classes,
 * but we will be able to treat them exactly the same
 * @param  Model  $model [description]
 * @return [type]        [description]
 */
function testModel(Model $model) // every passing has to be Model
{
    $model->all();
}

testModel($book); // or testModel($book);
testModel($author); 
testModel($format); 
testModel($genre); 
testModel($publisher); 


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