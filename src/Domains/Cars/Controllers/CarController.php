<?php

namespace Domains\Cars\Controllers;

use Domains\Cars\Requests\CarRequest;
use Domains\Cars\Models\Car;
use Persistence\Repositories\CarRepository;
use Inertia\Inertia;

class CarController extends Controller
{
    public function __construct(
        public CarRepository $carRepository
    ) {}

    public function index()
    {
        return Inertia::render('Index', [
            'cars' => Car::all()->sortBy('id'),
          ]);
    }

    public function store(CarRequest $request): void
    {
        $data = $request->validated();

        $this->carRepository->add($data);
    }

    public function update(CarRequest $request, Car $car): void
    {
        $data = $request->validated();

        $this->carRepository->update($car, $data);
    }

    public function destroy(Car $car): void
    {
        $this->carRepository->destroy($car);
    }
}
