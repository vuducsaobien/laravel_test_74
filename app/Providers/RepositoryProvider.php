<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Repository\InterfacesRepo\CategoryRepositoryInterface;
use App\Http\Repository\CategoryRepository;

use App\Http\Repository\InterfacesRepo\HomeRepositoryInterface;
use App\Http\Repository\HomeRepository;


class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            HomeRepositoryInterface::class,
            HomeRepository::class,
        );

        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class,
        );
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
