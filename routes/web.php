<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentCallbackController;
use App\Http\Controllers\KpiController;

Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);

Route::get('order/show', [App\Http\Controllers\OrderController::class, 'show'])->name('order.show');

Route::get('/', function () {
    return view('orders.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
    //     return view('welcome');
    // });

Route::resource('kpis',KpiController::class);
Route::resource('/', WelcomeController::class);
Route::get('/product-filter', [App\Http\Controllers\WelcomeController::class, 'product_filter'])->name('welcome.product_filter');
