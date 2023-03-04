<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProbabilityLevelRequest;
use App\Http\Requests\UpdateProbabilityLevelRequest;
use App\Models\ProbabilityLevel;
use Illuminate\Http\Request;

class ProbabilityLevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.probability_levels.index')->only('index');
        $this->middleware('can:admin.probability_levels.create')->only('create');
        $this->middleware('can:admin.probability_levels.edit')->only('edit');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('probability_levels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('probability_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProbabilityLevelRequest $request)
    {
        ProbabilityLevel::create($request->validated());
        return redirect()->route('probability_levels.index')->with(['message' => 'Nivel de probabilidad creado']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProbabilityLevel  $probabilityLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(ProbabilityLevel $probabilityLevel)
    {
        return view('probability_levels.edit', compact('probabilityLevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProbabilityLevel  $probabilityLevel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProbabilityLevelRequest $request, ProbabilityLevel $probabilityLevel)
    {
        $probabilityLevel->update($request->validated());
        return redirect()->route('probability_levels.index')->with(['message' => 'Nivel de probabilidad actualizado']);
    }
}
