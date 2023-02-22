<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActivityRequest extends FormRequest
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
            'mtpd' =>   ['required', 'string', 'max:50'],
            'rto' =>    ['required', 'string', 'max:50'],
            'rpo' =>    ['required', 'string', 'max:50'],
            'aceptable_minimun' =>  ['required', 'string', 'max:50'],
            'priority' =>   ['required', 'numeric', 'min:1', 'max:100'],
            'other_proc_depen' =>   ['required','boolean'],
            'processes' =>  ['required', 'string', 'max:500'],
            'criticial_periods' =>  ['required', 'string', 'max:500'],
            'procedure' =>  ['required', 'string', 'max:500'],
            'normal_op_people' =>   ['required', 'string', 'max:500'],
            'people_required' =>    ['required', 'string', 'max:100'],
            'applications' =>   ['required', 'string', 'max:500'],
            'equiptment' => ['required', 'string', 'max:500'],
            'services' =>   ['required', 'string', 'max:500'],
            'physical_space' => ['required', 'string', 'max:500'],
            'people' => ['required', 'string', 'max:500'],
            'skills' => ['required', 'string', 'max:500'],
            'providers' =>  ['required', 'string', 'max:500'],
            'other_resources' =>    ['required', 'string', 'max:500'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'other_proc_depen' => (bool)$this->other_proc_depen
        ]);
    }

    public function messages()
    {
        return [
            'aceptable_minimun.required' => 'Debe ingresar un Mínimo nivel aceptable de desempeño',
            'priority.required' => 'Debe ingresar una Prioridad de recuperación',
            'processes.required' => 'En caso de que no apliquen procesos escriba N/A',
            'criticial_periods.required' => 'Debe ingresar Periodos críticos',
            'procedure.required' => 'Debe ingresar los Procedimientos Alternativos',
            'normal_op_people.required' => 'Debe ingresar la Cantidad de personas en operacion normal',
            'people_required.required' => 'Debe ingresar la Cantidad de personas requeridas',
            'applications.required' => 'Debe ingresar las Aplicaciones',
            'equiptment.required' => 'Debe ingresar los Equipos',
            'services.required' => 'Debe ingresar los Servicios tecnológicos',
            'physical_space.required' => 'Debe ingresar el Espacio Físico',
            'people.required' => 'Debe llenar el campo Personas',
            'skills.required' => 'Debe llenar el campo Competencias personales',
            'providers.required' => 'Debe ingresar los Proveedores',
            'other_resources.required' => 'Debe llenar los campos Otros recursos',
        ];
    }
}
