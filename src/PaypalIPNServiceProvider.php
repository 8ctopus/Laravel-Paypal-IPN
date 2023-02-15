<?php

namespace Oct8pus\PaypalIPN;

use Illuminate\Support\ServiceProvider;

class PaypalIPNServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() : void
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() : void
    {
        $this->app->make('Fahim\PaypalIPN\PaypalIPNListener');
    }
}
