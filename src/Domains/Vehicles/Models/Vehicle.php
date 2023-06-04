<?php

namespace Domains\Vehicles\Models;

use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'brand',
        'model',
        'licence_number'
    ];

    protected $casts = [
        'type' => VehicleTypes::class,
        'brand' => VehicleBrands::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
