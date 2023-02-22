<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($this->user->id)],
            'roles' => 'required|array',
            'department_id' => 'required|numeric',
            'cargo' => 'required|string|max:255',
            'status' => 'required|boolean'
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
            'roles.required' => 'Elija al menos un rol',
            'email.unique' => 'El correo electrónico ya está en uso',
        ];
    }
}
