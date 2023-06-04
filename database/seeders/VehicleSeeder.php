<?php

namespace Database\Seeders;

use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;
use Domains\Vehicles\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        Vehicle::create([
            'type' => VehicleTypes::CAR,
            'brand' => VehicleBrands::MERCEDES,
            'model' => 'MP-4',
            'licence_number' => 'DW22233'
        ]);

        Vehicle::create([
            'type' => VehicleTypes::CAR,
            'brand' => VehicleBrands::PEUGEOT,
            'model' => 'Partner',
            'licence_number' => 'DW33885'
        ]);

        Vehicle::create([
            'type' => VehicleTypes::CAR,
            'brand' => VehicleBrands::SCANIA,
            'model' => 'E6 R450',
            'licence_number' => 'DW87966'
        ]);
    }
}
