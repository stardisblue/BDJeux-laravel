<?php

namespace App\Providers;

use App\ItemState;
use App\ItemType;
use App\Status;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavigationBarProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.admin._navbar', 'layouts._navbar'], function ($view) {
            $view->with('navbarItemTypes', ItemType::all());
            $view->with('navbarItemStates', ItemState::all());
            $view->with('navbarStatuses', Status::all());
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
