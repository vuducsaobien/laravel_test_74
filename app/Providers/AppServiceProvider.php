<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Jobs\UpdateCategoryDbJob;

use App\Http\Services\HomeService;
use App\Http\Repository\HomeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UpdateCategoryDbJob::class, function ($app, $params) {
            return new UpdateCategoryDbJob($params['time']);
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
