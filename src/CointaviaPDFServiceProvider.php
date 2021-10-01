<?php

namespace Cointavia\PDF;

use Illuminate\Support\ServiceProvider;

class CointaviaPDFServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('cointaviapdf', function($app) {
            return new CointaviaPDFController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        include __DIR__ . '/routes.php';

        $this->publishes([
            __DIR__ . '/config/cointavia-pdf.php' => config_path('cointavia-pdf.php'),
        ], 'config');


    }
}
