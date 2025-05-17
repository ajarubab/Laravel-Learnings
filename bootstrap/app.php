<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\DisabilityCheck;
use App\Http\Middleware\GenderCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(AgeCheck::class);
        $middleware->appendToGroup('CDG_check', [CountryCheck::class, DisabilityCheck::class, GenderCheck::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
