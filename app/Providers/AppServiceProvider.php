<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        // condition 1: if the request is from the localhost, then we will use the localhost url
        // if (env('APP_ENV') === 'production') {
        //     $this->app['request']->server->set('HTTPS', 'on'); // this line

        //     URL::forceSchema('https');
        // }

        // // condition 2: if the request is from the localhost, then we will use the localhost url
        // if (env('APP_FORCE_HTTPS', false)) {
        //     URL::forceScheme('https');
        // }

        if (env('APP_ENV') !== 'local') {
            $url->forceScheme('https');
        }
    }
}