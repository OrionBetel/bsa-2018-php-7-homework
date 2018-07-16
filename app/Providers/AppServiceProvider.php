<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\CurrencyServiceInterface;
use App\Services\MoneyServiceInterface;
use App\Services\UserServiceInterface;
use App\Services\WalletServiceInterface;

use App\Services\CurrencyService;
use App\Services\MoneyService;
use App\Services\UserService;
use App\Services\WalletService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CurrencyServiceInterface::class,
            CurrencyService::class
        );

        $this->app->bind(
            MoneyServiceInterface::class,
            MoneyService::class
        );

        $this->app->bind(
            UserServiceInterface::class,
            UserService::class
        );

        $this->app->bind(
            WalletServiceInterface::class,
            WalletService::class
        );
    }
}
