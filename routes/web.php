<?php

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\SalesController;

use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);


//Home
// Route:: get('/', [HomeController::class, 'index']);

// //product
// Route:: prefix ('category')->group(function(){
//     Route:: get ('/food-beverage', [ProductController::class, 'food']);
//     Route:: get ('/beauty-health', [ProductController::class, 'beauty']);
//     Route:: get ('/home-care', [ProductController::class, 'home']);
//     Route:: get ('/baby-kid', [ProductController::class, 'baby']);
// });

// //user
// Route::get ('/user/{id}/name/{name}', [UserController::class, 'profile']);

// //Penjualan
// Route::get ('/sales', [SalesController::class, 'index']);