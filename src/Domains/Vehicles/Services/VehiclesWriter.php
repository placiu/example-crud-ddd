<?php

namespace Domains\Vehicles\Services;

use Domains\Vehicles\Entities\Vehicle;
use Domains\Vehicles\Interfaces\VehiclesWriterInterface;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehiclesWriter implements VehiclesWriterInterface
{
    public function __construct(
        protected VehicleRepositoryInterface $repository,
    ) {}

    public function create(array $data): Vehicle
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data): Vehicle
    {
        return $this->repository->update($id, $data);
    }
}
