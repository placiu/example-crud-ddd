<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'make' => 'Mercedes',
            'model' => 'MP-4',
            'licence_number' => 'DW22233'
        ]);

        Car::create([
            'make' => 'Peugeot',
            'model' => 'Partner',
            'licence_number' => 'DW33885'
        ]);

        Car::create([
            'make' => 'Scania',
            'model' => 'E6 R450',
            'licence_number' => 'DW87966'
        ]);
    }
}
