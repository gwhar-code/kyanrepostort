<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use mysql_xdevapi\Schema;
//use Illuminate\Support\Facades\Schema;

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
    public function boot()
    {
        //الاصدارات السابقه عند عمل امر php artisan migrate
       // Schema::defaultStringLength(191);
    }
}
