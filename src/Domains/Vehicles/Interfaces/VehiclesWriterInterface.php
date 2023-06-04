<?php

namespace Domains\Vehicles\Interfaces;

interface VehiclesWriterInterface
{
    public function create(array $data): object;
    public function update(int $id, array $data): object;
}
