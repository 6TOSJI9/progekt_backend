<?php

namespace App\Providers;

//use A17\Twill\TwillNavigation;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('Client')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('Services')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('User')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('Pages')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('Order')
        );
    }
}
