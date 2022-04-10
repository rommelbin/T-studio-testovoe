<?php

namespace App\Providers;

use App\Interfaces\IRepository;
use App\Interfaces\IService;
use App\Repositories\BaseRepository;
use App\Services\BaseService;
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
        $this->app->bind(IRepository::class, BaseRepository::class);
        $this->app->bind(IService::class, BaseService::class);
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
