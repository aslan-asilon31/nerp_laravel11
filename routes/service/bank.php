<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service\BankController;


Route::resource('banks', BankController::class);

