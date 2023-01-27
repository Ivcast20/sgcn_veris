<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBiaRequest extends FormRequest
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
            'name' => ['required','string','max:255','unique:bia_processes,name'],
            'alcance' => ['required','string','max:10000'],
            'estado_id' => ['required','numeric'],
            'status' => ['required','boolean'],
            'fecha_inicio' => ['required','date'],
            'products' => ['required','array'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => true,
            'estado_id' => 1
        ]);
    }

    public function messages()
    {
        return [
            'products.required' => 'Debe seleccionar los servicios o productos',
            'name.unique' => 'Ya existe un BIA con este nombre',
        ];
    }

    
}
