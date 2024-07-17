<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MasterData\CompanyMaster;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts/master_inventory', function ($view) {
            $outlets = CompanyMaster::all();
            $view->with('outlets', $outlets);
        });
    }
}
