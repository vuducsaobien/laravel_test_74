<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Jobs\UpdateCategoryDbJobA;

use App\Http\Services\HomeService;
use App\Http\Repository\HomeRepository;
use App\Jobs\UpdateCategoryDbJobB;
use App\Jobs\UpdateCategoryDbJobC;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UpdateCategoryDbJobA::class, function ($app, $params) {
            // return new UpdateCategoryDbJobA($params['time']);
            return new UpdateCategoryDbJobA();
        });
        $this->app->bind(UpdateCategoryDbJobB::class, function ($app, $params) {
            // return new UpdateCategoryDbJobB($params['time']);
            return new UpdateCategoryDbJobB();
        });
        $this->app->bind(UpdateCategoryDbJobC::class, function ($app, $params) {
            // return new UpdateCategoryDbJobC($params['time']);
            return new UpdateCategoryDbJobC();
        });
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
