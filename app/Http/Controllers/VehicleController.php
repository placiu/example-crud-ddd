<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;
use Domains\Vehicles\Interfaces\VehicleDestroyerInterface;
use Domains\Vehicles\Interfaces\VehiclesBuilderInterface;
use Domains\Vehicles\Interfaces\VehiclesWriterInterface;
use Inertia\Inertia;
use Inertia\Response;

class VehicleController extends Controller
{
    public function index(VehiclesBuilderInterface $builder): Response
    {
        return Inertia::render('Index', [
            'types' => VehicleTypes::values(),
            'brands' => VehicleBrands::values(),
            'vehicles' => $builder->all(),
          ]);
    }

    public function store(VehicleRequest $request, VehiclesWriterInterface $writer): void
    {
        $data = $request->validated();

        $writer->create($data);
    }

    public function update(int $id, VehicleRequest $request, VehiclesWriterInterface $writer): void
    {
        $data = $request->validated();

        $writer->update($id, $data);
    }

    public function destroy($id, VehicleDestroyerInterface $destroyer): void
    {
        $destroyer->destroy($id);
    }
}
