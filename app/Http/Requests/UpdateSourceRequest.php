<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSourceRequest extends FormRequest
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
            'name' => ['required','string','max:255',Rule::unique('sources','name')->ignore($this->source->id)],
            'description' => ['required', 'string', 'max:500'],
            'status' => ['required','boolean']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => (bool)$this->status,
        ]);
    }

    public function messages()
    {
        return [
            'name.unique' => 'Ya existe una fuente con ese nombre',
            'description.required' => 'El campo descripción es obligatorio',
        ];
    }
}
