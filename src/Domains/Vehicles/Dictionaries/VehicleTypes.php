<?php

namespace Domains\Vehicles\Dictionaries;

use Domains\Vehicles\Traits\EnumToArray;
use Domains\Vehicles\Traits\EnumWithLabel;

enum VehicleTypes: String
{
    use EnumToArray, EnumWithLabel;

    case CAR = 'Car';
}
