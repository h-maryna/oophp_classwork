<?php

use App\Framework\RegexRouter as Route;

// /^\/?([a-z]+)\/?$/
Route::get('home', function(){
    App\Controllers\PageController::home();
});

// /^\/?([a-z]+)\/?$/
//  0 = about
//  1 = about
Route::get('about', function(){
    App\Controllers\PageController::about();
});

// /^\/?([a-z]+)\/?$/
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
