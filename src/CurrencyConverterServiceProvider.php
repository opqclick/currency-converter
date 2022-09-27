<?php

namespace Opqclick\CurrencyConverter;

use Illuminate\Support\ServiceProvider;

class CurrencyConverterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register Facade
        $this->app->bind('currencyconverter', function($app) {
            return new CurrencyConverter();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
