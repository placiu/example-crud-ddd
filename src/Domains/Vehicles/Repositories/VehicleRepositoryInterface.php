<?php

namespace Domains\Vehicles\Repositories;

use Domains\Vehicles\Entities\Vehicle;

interface VehicleRepositoryInterface
{
    public function index(): array;
    public function show(int $id): Vehicle;
    public function create(array $data): Vehicle;
    public function update(int $id, array $data): Vehicle;
    public function destroy(int $id): void;
}
