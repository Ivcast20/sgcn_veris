<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityGRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use App\Models\ActivityParameterScore;
use App\Models\Level;
use App\Models\Parameter;
use App\Models\ProductScoreAverage;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.activities.index')->only('index');
        $this->middleware('can:admin.activities.create')->only('create');
        $this->middleware('can:admin.activities.edit')->only(['edit','edit2']);
    }
    /**
     * Muestra las actividades de un producto crítico
     * $id es el $id del producto crítico
     * @return \Illuminate\Http\Response
     */
    public function index($bia_id, $product_id)
    {
        return view('activities.index', compact('product_id', 'bia_id'));
    }

    /**
     * Muestra el formulario para agregar una nueva actividad
     * $id es el código del producto crítico
     * @return \Illuminate\Http\Response
     */
    public function create($bia_id, ProductScoreAverage $product)
    {
        $parametros = Parameter::where([['bia_id', $product->bia_process_id], ['status', true]])->select(['id', 'name'])->get();
        $niveles = Level::where([['bia_id', $product->bia_process_id], ['status', true]])->select(['id', 'value', 'name'])->get();
        return view('activities.create', compact('parametros', 'niveles', 'product', 'bia_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        //dd($request->validated());
        $actividad = Activity::create($request->validated());
        $parametros_calif = $request->safe()->parametros;
        foreach ($parametros_calif as $key => $value) {
            ActivityParameterScore::create(
                [
                    'score' => $value,
                    'parameter_id' => $key,
                    'activity_id' => $actividad->id,
                ]
            );
        }

        return redirect()->route('activities.index',
            ['bia_id' => $request->safe()->bia_id,
            'product_id' => $request->safe()->critic_product_id
            ])->with(['message' => 'Actividad Guardada', 'typo' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $activity->update($request->validated());
        return redirect()->route('activities.index',
            ['bia_id' => $activity->criticproduct->bia_process_id,
            'product_id' => $activity->criticproduct->id
            ])->with(['message' => 'Actividad Guardada', 'typo' => 'success']);
    }

    public function edit2(Activity $activity)
    {
        return view('activities.edit2', compact('activity'));
    }

    public function update2(UpdateActivityGRequest $request, Activity $activity)
    {
        $activity->update($request->validated());
        return redirect()->route('activities.index',
            ['bia_id' => $activity->criticproduct->bia_process_id,
            'product_id' => $activity->criticproduct->id
            ])->with(['message' => 'Actividad Actualizada', 'typo' => 'success']);
    }
}
