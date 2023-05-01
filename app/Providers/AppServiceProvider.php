<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Jobs\UpdateCategoryDbJob;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // $this->app->bind(
        //     'App\Http\Repository\InterfacesRepo\HomeRepositoryInterface',
        //     'App\Http\Repository\HomeRepository',
        // );

        // $this->app->bind(
        //     'App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface',
        //     'App\Http\Repository\CategoryRepository'
        // );

        // $this->app->bind(
        //     'App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface',
        //     'App\Http\Repository\CategoryRepository'
        // );

        // $this->app->bind(UpdateCategoryDbJob::class, function ($app, $params) {

        //     echo '<pre style="color:red";>$params === '; print_r($params);echo '</pre>';
        //     // echo '<h3>Die is Called - 123</h3>';die;
        //     // return new UpdateCategoryDbJob($params['time']);
        //     return new UpdateCategoryDbJob();
        // });

        // $this->app->when(UpdateCategoryDbJob::class)
        //   ->needs('$time')
        //   ->give(function ($app, $params) {

        //     echo '<pre style="color:red";>$params === '; print_r($params);echo '</pre>';
        //     echo '<pre style="color:red";>$app === '; print_r($app);echo '</pre>';
        //     echo '<h3>Die is Called - 1234</h3>';die;
        //       return $app['timeJob'];
        //   });

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
