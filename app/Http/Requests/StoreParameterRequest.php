<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreParameterRequest extends FormRequest
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
            'name' => ['required','string','max:255',Rule::unique('parameters')->where('bia_id',$this->bia_id)],
            'bia_id' => ['required','numeric']
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Ya existe un parámetro con este nombre en este BIA',
            'bia_id.required' => 'Eliga un BIA'
        ];
    }
}
