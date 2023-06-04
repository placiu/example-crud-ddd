<?php

namespace App\Http\Requests;

use Domains\Vehicles\Dictionaries\VehicleBrands;
use Domains\Vehicles\Dictionaries\VehicleTypes;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class VehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => ['required', new Enum(VehicleTypes::class)],
            'brand' => ['required', new Enum(VehicleBrands::class)],
            'make' => ['required', 'string', 'min:1', 'max:255'],
            'licence_number' => ['required', 'string', 'min:1', 'max:255'],
        ];
    }
}
