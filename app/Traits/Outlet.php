<?php

namespace App\Traits;
use App\Models\MasterData\CompanyMaster;

trait Outlet
{
    public function HasOutlet($request, $path)
    {
        $outlets = CompanyMaster::all();
        
        return $outlets;
    }
}