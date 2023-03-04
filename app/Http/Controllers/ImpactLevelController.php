<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpactLevelRequest;
use App\Http\Requests\UpdateImpactLevelRequest;
use App\Models\ImpactLevel;
use Illuminate\Http\Request;

class ImpactLevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.impact_levels.index')->only('index');
        $this->middleware('can:admin.impact_levels.create')->only('create');
        $this->middleware('can:admin.impact_levels.edit')->only('edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('impact_levels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('impact_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImpactLevelRequest $request)
    {
        ImpactLevel::create($request->validated());
        return redirect()->route('impact_levels.index')->with(['message' => 'Nivel de impacto creado', 'typo' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImpactLevel  $impactLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(ImpactLevel $impactLevel)
    {
        return view('impact_levels.edit', compact('impactLevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImpactLevel  $impactLevel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImpactLevelRequest $request, ImpactLevel $impactLevel)
    {
        //return json_encode(['request' => $request->all(), $impactLevel]);
        $impactLevel->update($request->validated());
        return redirect()->route('impact_levels.index')->with(['message' => 'Nivel de impacto actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImpactLevel  $impactLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImpactLevel $impactLevel)
    {
        //
    }
}
