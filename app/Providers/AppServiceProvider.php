<?php

namespace App\Providers;

use App\Helpers\DBHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
    public function boot()
    {
        if (DB::connection()->getDriverName() == 'mysql'
            && ! DBHelper::testVersion('5.7.7')) {
            Schema::defaultStringLength(191);
        }
    }
}
