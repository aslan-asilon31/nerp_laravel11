<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accounting\AdjustmentEntryController;

// Jurnal Penyesuaian
Route::resource('adjustment-entries', AdjustmentEntryController::class);
