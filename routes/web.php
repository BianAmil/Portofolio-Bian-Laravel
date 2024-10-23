<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login'); 
});

Route::get('/home', function () {
    return view('index'); 
});

Route::get('/welcome', function () {
    return view('welcome'); 
});
Route::get('/about', function () {
    return view('about'); 
}); 