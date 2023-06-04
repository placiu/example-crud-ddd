<?php

namespace Domains\Vehicles\Interfaces;

interface VehiclesReaderInterface
{
    public function readById(int $id): object;
}
