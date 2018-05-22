<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Routing\UrlGenerator as URLGen;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(URLGen $url)
    {
      if(env('APP_ENV') !== 'local')
        {
            $url->forceSchema('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
