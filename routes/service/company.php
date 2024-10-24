<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service\CompanyController;


Route::resource('companies', CompanyController::class);

