<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accounting\ClosingEntryController;

Route::resource('closing-entries', ClosingEntryController::class);
