<?php

namespace Domains\Vehicles\Interfaces;

interface VehicleDestroyerInterface
{
    public function destroy(int $id): void;
}
