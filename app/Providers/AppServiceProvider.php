<?php

namespace App\Providers;

use App\Facades\IssueFacade;
use App\Facades\ParameterFacade;
use App\Facades\QuoteFacade;
use App\Facades\UserFacade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('quote-facade', function ($app) {
            return new QuoteFacade();
        });
        $this->app->singleton('user-facade', function ($app) {
            return new UserFacade();
        });
        $this->app->singleton('issue-facade', function ($app) {
            return new IssueFacade();
        });
        $this->app->singleton('parameter-facade', function ($app) {
            return new ParameterFacade();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
