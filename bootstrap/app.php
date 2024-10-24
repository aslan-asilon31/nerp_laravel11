<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
            __DIR__.'/../routes/api.php',
            __DIR__.'/../routes/web.php',

            __DIR__.'/../routes/service/department.php',
            __DIR__.'/../routes/service/bank.php',
            __DIR__.'/../routes/service/brand.php',
            __DIR__.'/../routes/service/company.php',
            __DIR__.'/../routes/service/outlet.php',
            __DIR__.'/../routes/service/roles.php',

            __DIR__.'/../routes/accounting/account.php',
            __DIR__.'/../routes/accounting/general_journal.php',
            __DIR__.'/../routes/accounting/general_ledger.php',
            __DIR__.'/../routes/accounting/trial_balance.php',
            __DIR__.'/../routes/accounting/adjustment_entries.php',
            __DIR__.'/../routes/accounting/trial_balance_after_adjustment_entries.php',
            __DIR__.'/../routes/accounting/financial_report.php',
            __DIR__.'/../routes/accounting/closing_entries.php',
            __DIR__.'/../routes/accounting/trial_balance_after_closing_entries.php',

            __DIR__.'/../routes/inventory/web.php',

        ],
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
