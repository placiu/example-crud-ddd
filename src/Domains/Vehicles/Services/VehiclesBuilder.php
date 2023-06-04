<?php

namespace Domains\Vehicles\Services;

use Domains\Vehicles\Interfaces\VehiclesBuilderInterface;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehiclesBuilder implements VehiclesBuilderInterface
{
    public function __construct(
        protected VehicleRepositoryInterface $repository,
    ) {}

    public function all(): array
    {
        return $this->repository->index();
    }
}
