<?php

namespace Domains\Vehicles\Dictionaries;

use Domains\Vehicles\Traits\EnumToArray;
use Domains\Vehicles\Traits\EnumWithLabel;

enum VehicleBrands: String
{
    use EnumToArray, EnumWithLabel;

    case PEUGEOT = 'peugeot';
    case MERCEDES = 'mercedes';
    case SCANIA = 'scania';
}
