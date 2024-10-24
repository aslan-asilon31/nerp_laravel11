<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accounting\GeneralLedgerController;

Route::resource('general-ledger', GeneralLedgerController::class);
