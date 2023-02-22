<?php

namespace App\Http\Livewire\Activities;

use App\Models\Activity;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCriticalActivities extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public $product_id;
    public $bia_id;

    public function render()
    {
        $actividades = Activity::where([
            ['name', 'like', '%' . $this->search . '%'],
            ['critic_product_id', '=', $this->product_id],
            ['is_critical', '=', true]
        ])->paginate(10);
        return view('livewire.activities.show-critical-activities', compact('actividades'));
    }
}
