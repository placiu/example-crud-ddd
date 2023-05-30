<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Inertia\Inertia;

class CarController extends Controller
{
    public function index()
    {
        return Inertia::render('Index', [
            'cars' => Car::all()->sortBy('id'),
          ]);
    }

    public function store(CarRequest $request): void
    {
        $data = $request->validated();

        Car::create($data);
    }

    public function update(CarRequest $request, Car $car): void
    {
        $data = $request->validated();

        $car->model = $data['model'];
        $car->make = $data['make'];
        $car->licence_number = $data['licence_number'];
        $car->save();
    }

    public function destroy(Car $car): void
    {
        $car->delete();
    }
}
