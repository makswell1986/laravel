<?php

namespace App\Providers;

use App\Http\Controllers\PaypalController;
use App\Http\Controllers\QiwiController;
use App\Http\Controllers\VisaController;
use App\Interfaces\PaymentInterface;
use App\Services\PaypalService;
use App\Services\QiwiService;
use App\Services\VisaService;
use App\Utilities\Notification;
use App\Utilities\Telegramm;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
        $this->app->when(PaypalController::class)
        ->needs(PaymentInterface::class)
        ->give(PaypalService::class);
        
        $this->app->when(QiwiController::class)
        ->needs(PaymentInterface::class)
        ->give(QiwiService::class);


        $this->app->when(VisaController::class)
        ->needs(PaymentInterface::class)
        ->give(VisaService::class);


        $this->app->bind(Notification::class,Telegramm::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
