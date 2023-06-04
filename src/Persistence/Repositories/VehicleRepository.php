<?php

namespace Persistence\Repositories;

use App\Models\Vehicle;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehicleRepository implements VehicleRepositoryInterface
{
    public function add(array $data): Vehicle
    {
        return Vehicle::create($data);
    }

    public function update(object $model, array $data): object
    {
        $model->type = $data['type'];
        $model->brand = $data['brand'];
        $model->model = $data['model'];
        $model->licence_number = $data['licence_number'];
        $model->save();

        return $model;
    }

    public function destroy(object $model): void
    {
        $model->delete();
    }
}
