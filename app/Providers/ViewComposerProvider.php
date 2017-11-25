<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('head', 'App\Http\ViewComposers\SiteContentComposer@head');
        view()->composer('header', 'App\Http\ViewComposers\SiteContentComposer@header');
    }

}
