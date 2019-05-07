<?php

use App\Framework\Router as Route;

Route::get('home', function(){
    App\Controllers\PageController::home();
});

Route::get('about', function(){
    App\Controllers\PageController::about();
});

Route::get('shop', function(){
    App\Controllers\PageController::shop();
});

Route::get('contact', function(){
    App\Controllers\PageController::contact();
});

Route::post('contact', function(){
    App\Controllers\PageController::contact_send();
});


/*--Book routers ------------------------*/

Route::get('/books', function(){
    App\Controllers\BooksController::index();
});
