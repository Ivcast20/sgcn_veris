<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'product_id' => ['required','numeric'],
            'parametros' => ['required','array'],
            'parametros.*.value' => ['required','numeric'],
        ];
    }

    public function messages()
    {
        return [
            'parametros.required' => 'Debe calificar todos los parámetros',
            'name.unique' => 'Ya existe un BIA con este nombre',
            'parametros.*.value.required' => 'Debe calificar todos los parámetros',
        ];
    }
}
