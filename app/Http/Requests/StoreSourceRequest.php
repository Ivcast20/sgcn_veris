<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSourceRequest extends FormRequest
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
            'name' => ['required','string','max:255','unique:sources'],
            'description' => ['required', 'string', 'max:500']
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Ya existe una fuente con ese nombre',
            'description.required' => 'El campo descripción es obligatorio',
        ];
    }
}
