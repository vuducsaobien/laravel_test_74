<?php

namespace App\Providers;

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

        $models = array(
            'CategoryRepositoryInterface',
        );

        $this->app->bind(
            'App\Http\Repository\HomeRepositoryInterface',
            'App\Http\Repository\HomeRepository',
        );

        $this->app->bind(
            'App\Http\Repository\CategoryRepositoryInterface',
            'App\Http\Repository\CategoryRepository'
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
