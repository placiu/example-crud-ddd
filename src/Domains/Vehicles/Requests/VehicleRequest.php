<?php

namespace Domains\Vehicles\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'model' => ['required', 'string', 'min:1', 'max:255'],
            'make' => ['required', 'string', 'min:1', 'max:255'],
            'licence_number' => ['required', 'string', 'min:1', 'max:255'],
        ];
    }
}
