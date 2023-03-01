<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTreatmentOptionRequest;
use App\Http\Requests\UpdateTreatmentOptionRequest;
use App\Models\TreatmentOption;
use Illuminate\Http\Request;

class TreatmentOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('treatmentoptions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treatmentoptions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreatmentOptionRequest $request)
    {
        TreatmentOption::create($request->validated());
        return redirect()->route('treatmentoptions.index')->with(['message' => 'Opción de tratamiento creada exitosamente', 'typo' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreartmentOption  $treartmentOption
     * @return \Illuminate\Http\Response
     */
    public function edit(TreatmentOption $treatmentoption)
    {
        return view('treatmentoptions.edit', compact('treatmentoption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TreartmentOption  $treartmentOption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreatmentOptionRequest $request, TreatmentOption $treatmentoption)
    {
        $treatmentoption->update($request->validated());
        return redirect()->route('treatmentoptions.index')->with(['message' => 'Opción de tratamiento actualizada']);
    }
}
