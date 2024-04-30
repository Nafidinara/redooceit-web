<?php

namespace App\Providers;

use App\Interfaces\TpsRepositoryInterface;
use App\Interfaces\PenukaranRepositoryInterface;
use App\Repositories\TpsRepository;
use App\Repositories\PenukaranRepository;
use App\Interfaces\SampahRepositoryInterface;
use App\Repositories\SampahRepository;
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
        $this->app->bind(PenukaranRepositoryInterface::class, PenukaranRepository::class);
        $this->app->bind(SampahRepositoryInterface::class, SampahRepository::class);
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
