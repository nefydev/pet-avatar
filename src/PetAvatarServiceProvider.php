<?php

namespace Nefydev\PetAvatar;

use Illuminate\Support\ServiceProvider;

class PetAvatarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('pet-avatar.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pet-avatar');
        $this->mergeConfigFrom(__DIR__.'/../config/cat.php', 'cat');
        $this->mergeConfigFrom(__DIR__.'/../config/dog.php', 'dog');

        // Register the main class to use with the facade
        $this->app->singleton('pet-avatar', function () {
            return new PetAvatar;
        });
    }
}
