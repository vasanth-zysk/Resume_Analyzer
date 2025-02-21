<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentAsset;
>>>>>>> 3bd5c97 (Initial Commit)
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        //
=======
        Filament::registerRenderHook(
            'head.end',
            fn () => '<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>'
        );
>>>>>>> 3bd5c97 (Initial Commit)
    }
}
