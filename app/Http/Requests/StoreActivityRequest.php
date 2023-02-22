<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActivityRequest extends FormRequest
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
            'bia_id' => ['required','numeric'],
            'critic_product_id' => ['required','numeric'],
            'name' => ['required','string','max:500'],
            'parametros.*' => ['required','numeric'],
            'total_score' => ['required','numeric'],
            'is_critical' => ['required','boolean'],
            'justificacion' => ['required','string','max:500']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'is_critical' => (bool)$this->is_critical,
        ]);
    }

    public function messages()
    {
        return [
            'parametros.*.required' => 'Debe elegir una calificación para este parámetro',
        ];
    }


}
