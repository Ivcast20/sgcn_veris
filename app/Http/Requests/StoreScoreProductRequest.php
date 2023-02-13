<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreScoreProductRequest extends FormRequest
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
            'product_id' => ['required','numeric'],
            'user_id' => ['required','numeric'],
            'parametros.*' => ['required','numeric'],
            'total_score' => ['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id' => Auth::user()->id,
            'total_score' => collect($this->parametros)->sum(),
        ]);
    }

    public function messages()
    {
        return [
            'product_id.required' => 'Debe elegir el producto a calificar',
            'parametros.*.required' => 'Debe elegir una calificación para este parámetro',
        ];
    }
}
