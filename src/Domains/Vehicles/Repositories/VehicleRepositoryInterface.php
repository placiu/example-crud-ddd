<?php

namespace Domains\Vehicles\Repositories;

interface VehicleRepositoryInterface
{
    public function index(): array;
    public function show(int $id): object;
    public function create(array $data): object;
    public function update(int $id, array $data): object;
    public function destroy(int $id): void;
}
