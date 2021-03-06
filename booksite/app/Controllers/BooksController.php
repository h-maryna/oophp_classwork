<?php


namespace App\Controllers;

use App\Framework\Controller;
use App\Framework\View;
use App\Models\BookModel as Books;

class BooksController extends Controller
{
	public static function index()
	{   
		$title = 'Book List';
		$model = new Books();
		$books = $model->all();
        View::show('books/index', compact('title', 'books')); // lookf for title and books and puts it into array
	}

	public static function show($id)
	{   
		$title = 'Book List';
		$model = new Books();
		$book = $model->find($id);
        View::show('books/show', compact('title', 'book')); // lookf for title and books and puts it into array
	}


}