<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAverageScoreProduct extends FormRequest
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
            'is_critical' => ['required','boolean']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_critical' => (bool)$this->is_critical
        ]);
    }
}
