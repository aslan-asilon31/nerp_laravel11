<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Xendit\Xendit;

class XenditServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('xendit', function ($app) {
            Xendit::setApiKey(config('xendit.secret_key'));
            return new \Xendit\Xendit;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
