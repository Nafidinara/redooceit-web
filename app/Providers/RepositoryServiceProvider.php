<?php

namespace App\Providers;

use App\Interfaces\TpsRepositoryInterface;
use App\Repositories\TpsRepository;
use App\Interfaces\SetoranWargaRepositoryInterface;
use App\Repositories\SetoranWargaRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TpsRepositoryInterface::class, TpsRepository::class);
        $this->app->bind(SetoranWargaRepositoryInterface::class, SetoranWargaRepository::class);
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
