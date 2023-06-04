<?php

namespace Domains\Vehicles\Entities;

use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;

class Vehicle
{
    protected int $id;

    protected VehicleTypes $type;

    protected VehicleBrands $brand;

    protected string $model;

    protected \DateTime $created_at;

    protected \DateTime $updated_at;
}
