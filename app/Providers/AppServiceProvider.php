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


        // $this->app->bind("App\Contracts\\{$model}Interface", "App\Repositories\\{$model}Repository");

        // $this->app->bind("App\Http\Repository\\CategoryRepositoryInterface", "App\Http\Repository\\CategoryRepository");

        // $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        $this->app->bind(
            'App\Http\Repository\CategoryRepositoryInterface',
            'App\Http\Repository\CategoryRepository'
        );

        // foreach ($models as $model) {
            // $this->app->bind("App\Contracts\\{$model}Interface", "App\Repositories\\{$model}Repository");
            // $this->app->bind("App\Contracts\\{$model}Interface", "App\Http\Repository\\{$model}");

        // }

        // $this->app->singleton(
        //     \App\Http\Repository\CategoryRepositoryInterface::class
        // );

        // $this->app->singleton(
        //     \App\Http\Repository\HomeRepository::class,
        // );

        // $this->app->singleton(
        //     \App\Http\Repository\CategoryRepository::class
        // );
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
