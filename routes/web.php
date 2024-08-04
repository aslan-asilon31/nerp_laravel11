<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
// use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PaymentController;

Route::post('donation/pay', [App\Http\Controllers\DonationController::class, 'pay'])->name('donation.pay');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
Route::resource('/', WelcomeController::class);
Route::resource('blogs', BlogController::class);
// Route::resource('products', ProductController::class);
// Route::get('get-categories', [ProductController::class,'getProductsByCategory'])->name('get.products.by.category');

Route::put('/outlets/{outlet}', [OutletController::class, 'update'])->name('outlets.update');
Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::post('/webhook/xendit', [PaymentController::class, 'webhook'])->name('webhook');

