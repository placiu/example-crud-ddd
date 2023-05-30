<?php

namespace Persistence\Repositories;

use Domains\Cars\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Domains\Cars\Repositories\RepositoryInterface;

class CarRepository implements RepositoryInterface
{
    public function add(array $data): Model
    {
        return Car::create($data);
    }

    public function update(Model $car, array $data): Model
    {
        $car->model = $data['model'];
        $car->make = $data['make'];
        $car->licence_number = $data['licence_number'];
        $car->save();

        return $car;
    }

    public function destroy(Model $car): void
    {
        $car->delete();
    }
}