<?php

namespace Domains\Vehicles\Services;

use Domains\Vehicles\Entities\Vehicle;
use Domains\Vehicles\Interfaces\VehiclesReaderInterface;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehiclesReader implements VehiclesReaderInterface
{
    public function __construct(
        protected VehicleRepositoryInterface $repository,
    ) {}

    public function readById(int $id): Vehicle
    {
        return $this->repository->show($id);
    }
}
