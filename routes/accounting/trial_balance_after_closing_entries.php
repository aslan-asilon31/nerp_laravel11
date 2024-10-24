<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accounting\AccountController;

// 
Route::resource('accounts', AccountController::class);
