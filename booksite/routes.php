<?php

use App\Framework\Router as Route;

Route::get('about', function(){
    echo '<h1>About Us!</h1>';
});

Route::get('shop', function(){
    echo '<h1>Shop for Clothes!</h1>';
});

Route::get('contact', function(){
    echo '<h1>Please our contact form!</h1>';
});

Route::post('contact', function(){
    var_dump($_POST);
});