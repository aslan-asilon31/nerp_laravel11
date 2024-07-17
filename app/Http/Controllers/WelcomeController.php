<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterData\CategoryMaster;

class WelcomeController extends Controller
{

    public function index()
    {
        $categories = CategoryMaster::all();
        return view('welcome', compact('categories'));
    }
}
