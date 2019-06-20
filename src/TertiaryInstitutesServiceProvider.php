<?php

namespace Stephenjude\TertiaryInstitutes;

use Illuminate\Support\ServiceProvider;

class TertiaryInstitutesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('tertiary-institutes.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'tertiary-institutes');

        // Register the main class to use with the facade
        $this->app->singleton('tertiary-institutes', function () {
            return new TertiaryInstitutes;
        });

    }
}
