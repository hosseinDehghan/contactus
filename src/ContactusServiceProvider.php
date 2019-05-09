<?php

namespace Hosein\Contactus;

use Illuminate\Support\ServiceProvider;

class ContactusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'ContactView');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/ContactView'),
        ],"contactview");
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->publishes([
            __DIR__.'/Migrations' => database_path('/migrations')
        ], 'contactmigrations');
    }
}
