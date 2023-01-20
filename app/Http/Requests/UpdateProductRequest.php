<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
        $nombre = $this->name;
        $categoria = $this->category_id;
        return [
            'name' => ['required','string','max:255',Rule::unique('products')->ignore($this->product->id)],
            'category_id' => ['required','integer'],
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
            'name.unique' => 'Ya existe un producto con este nombre',
            'category_id.required' => 'El campo categoría es obligatorio'
        ];
    }
}
