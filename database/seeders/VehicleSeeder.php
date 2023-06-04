<?php

namespace Database\Seeders;

use Domains\Vehicles\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        Vehicle::create([
            'make' => 'Mercedes',
            'model' => 'MP-4',
            'licence_number' => 'DW22233'
        ]);

        Vehicle::create([
            'make' => 'Peugeot',
            'model' => 'Partner',
            'licence_number' => 'DW33885'
        ]);

        Vehicle::create([
            'make' => 'Scania',
            'model' => 'E6 R450',
            'licence_number' => 'DW87966'
        ]);
    }
}
