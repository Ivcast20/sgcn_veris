<?php

namespace App\Http\Livewire\Activities;

use App\Models\Activity;
use Livewire\Component;
use Livewire\WithPagination;

class ShowActivities extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $product_id;

    protected $listeners = ['cambia_estado',  'render'];

    public function render()
    {
        $actividades = Activity::where([
            ['name', 'like', '%' . $this->search . '%'],
            ['critic_product_id', '=', $this->product_id]
        ])->paginate(10);
        return view('livewire.activities.show-activities', compact('actividades'));
    }

    public function cambia_estado(Activity $activity)
    {
        $nuevo_estado = $activity->is_critical ? false : true;
        $activity->is_critical = $nuevo_estado;
        $activity->save();
    }
}
