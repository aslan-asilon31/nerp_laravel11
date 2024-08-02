<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inventory\ProductController;




 
Route::resource('products', ProductController::class);
Route::get('get-categories', [ProductController::class,'getProductsByCategory'])->name('get.products.by.category');

Route::put('/outlets/{outlet}', [OutletController::class, 'update'])->name('outlets.update');
// Route::put('/outlets/{outlet}', [OutletController::class,'update'])->name('outlets.update');

