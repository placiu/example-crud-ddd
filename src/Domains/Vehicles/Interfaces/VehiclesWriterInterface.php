<?php

namespace Domains\Vehicles\Interfaces;

use Domains\Vehicles\Entities\Vehicle;

interface VehiclesWriterInterface
{
    public function create(array $data): Vehicle;
    public function update(int $id, array $data): Vehicle;
}
