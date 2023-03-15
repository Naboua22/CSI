<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUERequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => "required|String|min:2",
            'nombre_effectue' => "required|Integer",
            'nombre_ecu' => "required|Integer|min:1",
            'nombre_total' => "required|Integer",
            'programme_id' => "required|Integer",
        ];
    }
}
