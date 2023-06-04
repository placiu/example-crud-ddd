<?php

namespace Domains\Vehicles\Repositories;

interface VehicleRepositoryInterface
{
    public function add(array $data): object;
    public function update(object $model, array $data): object;
    public function destroy(object $model): void;
}
