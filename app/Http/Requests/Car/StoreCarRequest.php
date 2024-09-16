<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * @return
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'model_name' => ['required', 'string', 'min:3', 'max:255'],
            'brand' => ['required', 'string', 'unique:cars,brand'],
            'color' => ['required', 'string', 'max:40'],
            'year' => ['required', 'integer', 'digits:4'],
            'release_date' => ['required', 'date'],
        ];
    }
}
