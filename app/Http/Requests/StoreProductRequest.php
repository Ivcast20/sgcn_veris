<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
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
            'name' => ['required','string','max:255', /*Rule::unique('products')->where(function($query) use ($nombre,$categoria){
                return $query->where([['name',$nombre],['category_id',$categoria]]);
            })*/ 'unique:products'],
            'category_id' => ['required','integer'],
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Ya existe un producto con este nombre',
            'category_id.required' => 'El campo categoría es obligatorio'
        ];
    }
}
