<?php

namespace App\Providers;


use App\Services\ProviderService;
use Illuminate\Support\ServiceProvider;

class ProviderProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->singleton(ProviderServicervice::class,function ($app){
        return new ProviderService();
       });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
