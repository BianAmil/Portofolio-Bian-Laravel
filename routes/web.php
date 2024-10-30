<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/login', function () {
//     return view('login'); 
// });

// // Route::get('/home', function () {
// //     return view('index'); 
// // });

// Route::get('/welcome', function () {
//     return view('welcome'); 
// });
// Route::get('/about', function () {
//     return view('about'); 
// }); 

Route::get('/', [HomeController::class, 'login'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('Welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');