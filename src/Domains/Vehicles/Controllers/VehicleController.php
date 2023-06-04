<?php

namespace Domains\Vehicles\Controllers;

use Domains\Vehicles\Models\Vehicle;
use Domains\Vehicles\Requests\VehicleRequest;
use Inertia\Response;
use Persistence\Repositories\VehicleRepository;
use Inertia\Inertia;

class VehicleController extends Controller
{
    public function __construct(
        public VehicleRepository $vehicleRepository,
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

        $this->vehicleRepository->add($data);
    }

    public function update(VehicleRequest $request, Vehicle $vehicle): void
    {
        $data = $request->validated();

        $this->vehicleRepository->update($vehicle, $data);
    }

    public function destroy(Vehicle $vehicle): void
    {
        $this->vehicleRepository->destroy($vehicle);
    }
}
