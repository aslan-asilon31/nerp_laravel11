<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PaymentController;


 
Route::resource('products', ProductController::class);

