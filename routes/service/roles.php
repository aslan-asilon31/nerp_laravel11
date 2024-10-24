<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service\RolesController;


Route::resource('roles', RolesController::class);

