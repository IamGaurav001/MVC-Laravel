<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\globalMiddleware;
use App\Http\Middleware\CmMiddleware;
use App\Http\Middleware\CheckToken;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //custom middleware
        // $middleware->alias([
        //     'agefactor' => \App\Http\Middleware\CmMiddleware::class,
        // ]);
        
        //register global middleware
        // $middleware->append(globalMiddleware::class);

        //register Middleware in this function
        
        // $middleware->alias([
        //     'checkingage' => \App\Http\Middleware\Middleware::class,
        // ]);

        // $middleware->append([
        //     'checktoken' => CheckToken::class,
        // ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
