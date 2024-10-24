<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service\OutletController;


Route::resource('outlets', OutletController::class);

