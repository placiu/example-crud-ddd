<?php

namespace Domains\Vehicles\Dictionaries;

use Domains\Vehicles\Traits\EnumToArray;

enum VehicleBrands: String
{
    use EnumToArray;

    case PEUGEOT = 'peugeot';
    case MERCEDES = 'mercedes';
    case SCANIA = 'scania';
}
