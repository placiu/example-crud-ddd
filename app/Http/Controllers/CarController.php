<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CarController extends Controller
{
    public function index()
    {
        return Inertia::render('Index', [
            'cars' => Car::all()->sortBy('id'),
          ]);
    }

    public function store(Request $request): void
    {
        $data = $request->validate([
            'model' => ['required', 'string', 'min:1', 'max:255'],
            'make' => ['required', 'string', 'min:1', 'max:255'],
            'licence_number' => ['required', 'string', 'min:1', 'max:255'],
        ]);

        Car::create($data);
    }

    public function update(Request $request, Car $car): void
    {
        $data = $request->validate([
            'model' => ['required', 'string', 'min:1', 'max:255'],
            'make' => ['required', 'string', 'min:1', 'max:255'],
            'licence_number' => ['required', 'string', 'min:1', 'max:255'],
        ]);

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
