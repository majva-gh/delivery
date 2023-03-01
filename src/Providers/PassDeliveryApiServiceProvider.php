<?php

namespace PassQa\Delivery\Providers;

use Illuminate\Support\ServiceProvider;
use PassQa\Delivery\PassOrder;

class PassDeliveryApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/passdelivery.php',
            'passdelivery');

        $this->app->bind('pass-order', function () {
            return new PassOrder();
        });
    }
}