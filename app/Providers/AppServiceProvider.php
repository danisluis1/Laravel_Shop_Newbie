<?php

namespace App\Providers;

use App\ProductType;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('inc.header',function ($view) {
            $loai_san_pham = ProductType::all();
            $view->with('loai_san_pham', $loai_san_pham);
        });
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
