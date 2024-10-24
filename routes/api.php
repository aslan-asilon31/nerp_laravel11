<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;

Route::get('api/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

    
Route::apiResource('api/users',ProductController::class);
// Route::resource('products', ProductController::class);

