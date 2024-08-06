<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
// use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::resource('blogs', BlogController::class);
    Route::resource('/', WelcomeController::class);
    Route::get('/product-filter', [App\Http\Controllers\WelcomeController::class, 'product_filter'])->name('welcome.product_filter');
