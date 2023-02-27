<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProbabilityLevelRequest extends FormRequest
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

    public function rules()
    {
        return [
            'value' => ['required','numeric','min:1', Rule::unique('probability_levels','value')
                                                            ->where('clasification',$this->clasification)
                                                            ->ignore($this->probability_level->id)],
            'clasification' => ['required', 'string', 'max:50'],
            'description' => ['required','string','max:1000'],
            'status' => ['boolean','required']
        ];
    }

    public function messages()
    {
        return [
            'value.unique' => 'Ya existe un nivel con este valor y clasificación registrado',
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => (bool)$this->status,
        ]);
    }
}
