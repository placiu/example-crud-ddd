<?php

namespace Domains\Vehicles\Interfaces;

use Domains\Vehicles\Entities\Vehicle;

interface VehiclesReaderInterface
{
    public function readById(int $id): Vehicle;
}
