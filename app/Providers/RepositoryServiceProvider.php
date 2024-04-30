<?php

namespace App\Providers;

use App\Interfaces\SetoranWargaRepositoryInterface;
use App\Interfaces\TpsRepositoryInterface;
use App\Interfaces\PenukaranRepositoryInterface;
use App\Repositories\SetoranWargaRepository;
use App\Repositories\TpsRepository;
use App\Repositories\PenukaranRepository;
use App\Interfaces\SampahRepositoryInterface;
use App\Repositories\SampahRepository;
use App\Interfaces\ItemPenukaranRepositoryInterface;
use App\Repositories\ItemPenukaranRepository;
use App\Interfaces\WargaRepositoryInterface;
use App\Repositories\WargaRepository;
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
        $this->app->bind(ItemPenukaranRepositoryInterface::class, ItemPenukaranRepository::class);
        $this->app->bind(WargaRepositoryInterface::class, WargaRepository::class);
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
