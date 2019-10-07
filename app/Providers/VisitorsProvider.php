<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use App\Assist\VisitorsImpl;
use Illuminate\Support\ServiceProvider;

class VisitorsProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Assist\Contracts\Visitors', function() {
            return new VisitorsImpl();
        });
        $this->app->bind('visitors', function() {
            return App::make('App\Assist\Contracts\Visitors');
        });
    }
}
