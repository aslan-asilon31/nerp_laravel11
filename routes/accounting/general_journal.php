<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accounting\GeneralJournalController;

Route::resource('general-journal', GeneralJournalController::class);
