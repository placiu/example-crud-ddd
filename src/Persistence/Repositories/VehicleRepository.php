<?php

namespace Persistence\Repositories;

use App\Models\Vehicle as VehicleModel;
use Domains\Vehicles\Entities\Vehicle as VehicleEntity;
use Domains\Vehicles\Factories\VehicleFactory;
use Domains\Vehicles\Repositories\VehicleRepositoryInterface;

class VehicleRepository implements VehicleRepositoryInterface
{
    public function index(): array
    {
        $vehicleModels = VehicleModel::all();
        $vehicleModels->map(function(VehicleModel $vehicleModel) {
            return VehicleFactory::fromData($vehicleModel->toArray());
        });

        return $vehicleModels->all();
    }

    public function show(int $id): VehicleEntity
    {
        $vehicleModel = VehicleModel::find($id);

        return VehicleFactory::fromData($vehicleModel->toArray());
    }

    public function create(array $data): VehicleEntity
    {
        $vehicleModel = VehicleModel::create($data);

        return VehicleFactory::fromData($vehicleModel->toArray());
    }

    public function update(int $id, array $data): VehicleEntity
    {
        $vehicleModel = VehicleModel::find($id);

        $vehicleModel->type = $data['type'];
        $vehicleModel->brand = $data['brand'];
        $vehicleModel->model = $data['model'];
        $vehicleModel->licence_number = $data['licence_number'];
        $vehicleModel->save();

        return VehicleFactory::fromData($vehicleModel->toArray());
    }

    public function destroy(int $id): void
    {
        $vehicle = VehicleModel::find($id);

        $vehicle->delete();
    }
}
