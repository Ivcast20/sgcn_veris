<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreImpactLevelRequest extends FormRequest
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
            'value' => ['required','numeric','min:1', Rule::unique('impact_levels','value')->where('clasification',$this->clasification)],
            'clasification' => ['required', 'string', 'max:50'],
            'description' => ['required','string','max:1000'],
        ];
    }

    public function messages()
    {
        return [
            'value.unique' => 'Ya existe un nivel con este valor y clasificación registrado',
        ];
    }
}
