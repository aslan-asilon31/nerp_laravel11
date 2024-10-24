<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accounting\TrialBalanceController;

// Neraca saldo
Route::resource('trial-balance', TrialBalanceController::class);
