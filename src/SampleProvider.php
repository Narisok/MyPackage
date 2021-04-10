<?php

namespace Narisok\MyPackage;

use Illuminate\Support\ServiceProvider;

class SampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Sample::class, function($app) {
            return new Sample('REGISTER');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/sample.php' => config_path('sample.php')
        ], 'config');
    }
}
