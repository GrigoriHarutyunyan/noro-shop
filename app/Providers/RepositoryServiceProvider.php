<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\ProductVariant\ProductVariantRepositoryInterface::class, \App\Repositories\ProductVariant\ProductVariantRepository::class);
        $this->app->bind(\App\Repositories\Product\ProductRepositoryInterface::class, \App\Repositories\Product\ProductRepository::class);
        //:end-bindings:
    }
}
