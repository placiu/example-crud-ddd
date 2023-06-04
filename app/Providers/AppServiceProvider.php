<?php

namespace App\Providers;

use Domains\Vehicles\Interfaces\VehicleDestroyerInterface;
use Domains\Vehicles\Interfaces\VehiclesBuilderInterface;
use Domains\Vehicles\Interfaces\VehiclesReaderInterface;
use Domains\Vehicles\Interfaces\VehiclesWriterInterface;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;
use Domains\Vehicles\Services\VehicleDestroyer;
use Domains\Vehicles\Services\VehiclesBuilder;
use Domains\Vehicles\Services\VehiclesReader;
use Domains\Vehicles\Services\VehiclesWriter;
use Illuminate\Support\ServiceProvider;
use Persistence\Repositories\VehicleRepository;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->app->bind(VehicleRepositoryInterface::class, VehicleRepository::class);
        $this->app->bind(VehiclesBuilderInterface::class, VehiclesBuilder::class);
        $this->app->bind(VehiclesReaderInterface::class, VehiclesReader::class);
        $this->app->bind(VehiclesWriterInterface::class, VehiclesWriter::class);
        $this->app->bind(VehicleDestroyerInterface::class, VehicleDestroyer::class);
    }
}
