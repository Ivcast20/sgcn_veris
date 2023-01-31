<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLevelRequest extends FormRequest
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
            'name' => ['required','string','max:255',Rule::unique('levels')->where('bia_id',$this->bia_id)],
            'value' => ['required','numeric','min:1',Rule::unique('levels')->where('bia_id',$this->bia_id)],
            'bia_id' => ['required','numeric']
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Ya existe un nivel con este nombre en este BIA',
            'value.unique' => 'Ya existe un nivel con este valor en este BIA',
            'bia_id.required' => 'Eliga un BIA',
            'value.required' => 'El campo valor es obligatorio',
            'value.numeric' => 'El campo valor debe ser numérico',
            'value.min' => 'El valor del nivel debe ser mínimo 1'
        ];
    }
}
