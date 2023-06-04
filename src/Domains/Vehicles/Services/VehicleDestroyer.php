<?php

namespace Domains\Vehicles\Services;

use Domains\Vehicles\Interfaces\VehicleDestroyerInterface;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehicleDestroyer implements VehicleDestroyerInterface
{
    public function __construct(
        protected VehicleRepositoryInterface $repository,
    ) {}

    public function destroy(int $id): void
    {
        $this->repository->destroy($id);
    }
}
