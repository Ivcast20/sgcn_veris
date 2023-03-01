<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRiskRequest extends FormRequest
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
            'code' => ['required', 'string', 'max:50', Rule::unique('risks','code')],
            'description' => ['required', 'string', 'max:1000', Rule::unique('risks','description')],
            'causes' => ['required', 'array'],
            'consecuences' => ['required', 'max:10000'],
            'risk_owner_id' => ['required', 'numeric'],
            'existing_controls' => ['required', 'max:1000'],
            'probability' => ['required','numeric'],
            'impact' => ['required', 'numeric'],
            'risk_level' => ['required', 'numeric'],
            'is_aceptable' => ['required', 'boolean'],
            'treatment_option_id' => ['required', 'integer'],
            'treatment_plan' => 'nullable|required_if:treatment_option_id,=,3|string|max:20000',
            'responsable' => 'nullable|required_if:treatment_option_id,3|string|max:500',
            'resources' => 'nullable|required_if:treatment_option_id,3|string|max:500',
            'start_date' => 'nullable|required_if:treatment_option_id,3|date',
            'end_date' => 'nullable|required_if:treatment_option_id,3|date|after:start_date',
            'status_id' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_aceptable' => (bool)$this->is_aceptable
        ]);
    }
}
