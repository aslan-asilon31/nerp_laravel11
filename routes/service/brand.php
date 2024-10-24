<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service\BrandController;


Route::resource('brands', BrandController::class);

