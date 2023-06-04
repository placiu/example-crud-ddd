<?php

namespace Domains\Vehicles\Dictionaries;

use Domains\Vehicles\Traits\EnumToArray;

enum VehicleTypes: String
{
    use EnumToArray;

    case CAR = 'Car';
}
