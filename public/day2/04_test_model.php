<?php

require __DIR__ . '/../../config.php';

//$dbfile = BASE_PATH . '/database.sqlite';

//$dbh = new PDO('sqlite:' . $dbfile);

use classes\Models\BookModel;
use classes\Models\AuthorModel;
use classes\Models\FormatModel;
use classes\Models\GenreModel;
use classes\Models\PublisherModel;

try {

	$books = new BookModel($dbh);
	$all_books = $books->all();
	$one_book = $books->find(3);

	$authors = new AuthorModel($dbh);
	$all_authors = $authors->all();
	$one_author = $authors->find(2);

	$formats = new FormatModel($dbh);
	$all_formats = $formats->all();
	$one_format = $formats->find(3);

	$genres = new GenreModel($dbh);
	$all_genres = $genres->all();
	$one_genre = $genres->find(3);

	$publishers = new PublisherModel($dbh);
	$all_publishers = $publishers->all();
	$one_publisher = $publishers->find(3);

	echo '<pre>';
    var_dump($one_book); 
    var_dump($one_author);
    var_dump($one_format);
    var_dump($one_genre);
    var_dump($one_publisher);

    echo '</pre>';

} catch (Exception $e) {
	echo $e->getMessage();
	die;
}



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