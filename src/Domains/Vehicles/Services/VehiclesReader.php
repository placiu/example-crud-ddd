<?php

namespace Domains\Vehicles\Services;

use Domains\Vehicles\Interfaces\VehiclesReaderInterface;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehiclesReader implements VehiclesReaderInterface
{
    public function __construct(
        protected VehicleRepositoryInterface $repository,
    ) {}

    public function readById(int $id): object
    {
        return $this->repository->show($id);
    }
}
