<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', Rule::unique('categories')->ignore($this->category->id)],
            'status' => ['boolean'],
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
            'name.unique' => 'Ya existe una categoría con ese nombre',
        ];
    }
}
