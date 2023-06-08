<?php

namespace Domains\Vehicles\Factories;

use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;
use Domains\Vehicles\Entities\Vehicle;

class VehicleFactory
{
    public static function fromData(array $data): Vehicle
    {
        $vehicle = new Vehicle();
        $vehicle->setType(VehicleTypes::from(data_get($data, 'type')));
        $vehicle->setBrand(VehicleBrands::from(data_get($data, 'brand')));
        $vehicle->setModel(data_get($data, 'model'));
        $vehicle->setModel(data_get($data, 'licence_number'));
        $vehicle->setCreatedAt(new \DateTime(data_get($data, 'created_at')));
        $vehicle->setUpdatedAt(new \DateTime(data_get($data, 'updated_at')));

        return $vehicle;
    }
}
