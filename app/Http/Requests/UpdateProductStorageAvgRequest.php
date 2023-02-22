<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductStorageAvgRequest extends FormRequest
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
            'user_asigned' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'user_asigned.required' => 'Debe seleccionar a un responsable'
        ];
    }
}
