<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\UserList;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\UserList',function ($app) {
            return new UserList();
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
    }
}
