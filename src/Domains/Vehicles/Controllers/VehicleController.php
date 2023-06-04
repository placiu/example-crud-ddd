<?php

namespace Domains\Vehicles\Controllers;

use Domains\Vehicles\Models\Vehicle;
use Domains\Vehicles\Requests\VehicleRequest;
use Inertia\Response;
use Persistence\Repositories\CarRepository;
use Inertia\Inertia;

class VehicleController extends Controller
{
    public function __construct(
        public CarRepository $carRepository
    ) {}

    public function index(): Response
    {
        return Inertia::render('Index', [
            'vehicles' => Vehicle::all()->sortBy('id'),
          ]);
    }

    public function store(VehicleRequest $request): void
    {
        $data = $request->validated();

        $this->carRepository->add($data);
    }

    public function update(VehicleRequest $request, Vehicle $vehicle): void
    {
        $data = $request->validated();

        $this->carRepository->update($vehicle, $data);
    }

    public function destroy(Vehicle $vehicle): void
    {
        $this->carRepository->destroy($vehicle);
    }
}
