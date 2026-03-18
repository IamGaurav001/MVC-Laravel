<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        view::share('name', 'HI IAM Guarav');
        view::share('header', 'Welcome to Laravel');
        view::share('footer', 'Thank you for visiting');

        view::composer('*', function ($view) {
            $time = date('H:i:s');
            $view->with('time', $time);
        });
    }
}
