<?php

namespace Stephenjude\TertiaryInstitutes;

use Illuminate\Support\ServiceProvider;
use Stephenjude\Models\College;
use Stephenjude\Models\InnovativeInstitute;
use Stephenjude\Models\Polytechnic;
use Stephenjude\Models\StateUniversity;
use Stephenjude\Models\PrivateUniversity;
use Stephenjude\Models\FederalUniversity;

class TertiaryInstitutesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        $this->app->make('Http\Controllers\InstitutionController');
        $this->app->make('Http\Controllers\InstitutionCourseController');

        $this->app->make(InnovativeInstitute::class);
        $this->app->make(College::class);
        $this->app->make(Polytechnic::class);
        $this->app->make(StateUniversity::class);
        $this->app->make(PrivateUniversity::class);
        $this->app->make(FederalUniversity::class);

        $this->app->make(College::class);


        
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
