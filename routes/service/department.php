<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\service\DepartmentController;


Route::resource('departments', DepartmentController::class);

