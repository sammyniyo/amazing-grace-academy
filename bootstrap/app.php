<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'cache.public' => \App\Http\Middleware\CachePublicResponse::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // On CSRF token mismatch (419), redirect back with a clear message instead of "Page expired"
        $exceptions->renderable(function (\Illuminate\Session\TokenMismatchException $e, $request) {
            if ($request->isMethod('POST') && ($request->routeIs('login.attempt') || $request->routeIs('password.email') || $request->routeIs('password.update'))) {
                return redirect()->back()->withInput($request->except('password', '_token'))
                    ->withErrors(['email' => 'Your session expired. Please try again.']);
            }
            return null;
        });
    })->create();
