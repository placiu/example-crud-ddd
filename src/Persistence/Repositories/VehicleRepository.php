<?php

namespace Persistence\Repositories;

use App\Models\Vehicle;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehicleRepository implements VehicleRepositoryInterface
{
    public function index(): array
    {
        $vehicles = Vehicle::all();

        return $vehicles->toArray();
    }

    public function show(int $id): object
    {
        return Vehicle::find($id);
    }

    public function create(array $data): Vehicle
    {
        return Vehicle::create($data);
    }

    public function update(int $id, array $data): object
    {
        $vehicle = Vehicle::find($id);

        $vehicle->type = $data['type'];
        $vehicle->brand = $data['brand'];
        $vehicle->model = $data['model'];
        $vehicle->licence_number = $data['licence_number'];
        $vehicle->save();

        return $vehicle;
    }

    public function destroy(int $id): void
    {
        $vehicle = Vehicle::find($id);

        $vehicle->delete();
    }
}
