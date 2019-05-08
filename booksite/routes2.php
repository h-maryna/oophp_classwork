<?php

use App\Framework\RegexRouter as Route;

/*--Book routers ------------------------*/
Route::get('/^\/?(books)\/?$/', function(){
    App\Controllers\BooksController::index();
});

// /^?books/([\d])+/show/\?$/
// 0 = books/13/show
// 1 = 13
// show one book
Route::get('/^\/?books\/([\d])+\/show\/?$/', function($id){
    App\Controllers\BooksController::show($id);
});

Route::get('/^\/?(contact)\/?$/', function(){
    App\Controllers\PageController::contact();
});

Route::post('/^\/?(contact)\/?$/', function(){
    App\Controllers\PageController::contact_send();
});

// /^\/?([a-z]+)\/?$/
Route::get('/^\/?([a-z]+)\/?$/', function($page){
    App\Controllers\PageController::show($page);
});







