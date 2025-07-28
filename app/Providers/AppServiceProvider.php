<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Route; // for route pattern

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
        // Route Pattern
        // Route::pattern('id', '[a-zA-z]+');  // substitue for local constraint, web.php

    }
}
