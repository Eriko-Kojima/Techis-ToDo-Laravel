<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//useの追記
use Illuminate\Support\Facades\Schema;

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
    //boot内追記
    public function boot()
    {
        Schema::defaultStringLength(191);
        if (\App::environment(['production'])) {
            \URL::forceScheme('https');
        }
    }
}
