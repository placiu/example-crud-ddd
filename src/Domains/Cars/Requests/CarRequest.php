<?php

namespace Domains\Cars\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
