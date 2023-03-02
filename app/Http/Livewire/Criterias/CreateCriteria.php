<?php

namespace App\Http\Livewire\Criterias;

use App\Models\BiaProcess;
use App\Models\Criteria;
use App\Models\Level;
use App\Models\Parameter;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateCriteria extends Component
{
    public $bia_processes;
    public $levels;
    public $parameters;
    public $bia_id = NULL;
    public $level_id;
    public $parameter_id;
    public $description = NULL;

    public function mount()
    {
        $this->bia_processes = BiaProcess::where('status',1)->orderBy('id','desc')->get(['name','id']);
        $this->levels = collect();
        $this->parameters = collect();

    }

    public function render()
    {
        return view('livewire.criterias.create-criteria');
    }

    public function updatedBiaId($bia_id)
    {
        if($bia_id != "")
        {
            $this->levels = Level::where([
                ['bia_id',$this->bia_id],
                ['status',1]
            ])->pluck('name','id');
            $this->parameters = Parameter::where([
                ['bia_id',$this->bia_id],
                ['status',1]
            ])->pluck('name','id');
        }
        
    }

    protected function rules()
    {
        $parametro = $this->parameter_id;
        $nivel = $this->level_id;
        return [
            'bia_id' => ['required','numeric'],
            'level_id' => ['required','numeric'],
            'parameter_id' => ['required','numeric', Rule::unique('criterias')->where(function ($query) use ($parametro,$nivel){
                return $query->where('parameter_id',$parametro)->where('level_id',$nivel);
            })],
            'description' => ['required','string','max:1000']
        ];
    }

    protected $messages = [
        'bia_id.required' => 'Debe seleccionar el Bia',
        'level_id.required' => 'Seleccione un nivel',
        'parameter_id.required' => 'Seleccione un parámetro',
        'description.required' => 'Debe ingresar el criterio',
        'parameter_id.unique' => 'Ya existen un criterio registrado con ese nivel y parámetro'
    ];

    public function guardardescription()
    {
        $datosValidados = $this->validate();
        Criteria::create($datosValidados);
        return redirect()->route('criterias.index')->with('message','Se ha guardado el description exitosamente');
    }
}
