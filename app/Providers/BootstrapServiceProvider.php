<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Services\ProductVariant\ProductVariantServiceInterface::class, \App\Services\ProductVariant\ProductVariantService::class);
        $this->app->bind(\App\Services\Product\ProductServiceInterface::class, \App\Services\Product\ProductService::class);
        //:end-bindings:
    }
}
