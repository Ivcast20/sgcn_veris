<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateImpactLevelRequest extends FormRequest
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
            'value' => ['required','numeric','min:1', Rule::unique('impact_levels','value')
                                                            ->where('clasification',$this->clasification)
                                                            ->ignore($this->impact_level->id)],
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
