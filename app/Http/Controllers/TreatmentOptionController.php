<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTreatmentOptionRequest;
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
     * Display the specified resource.
     *
     * @param  \App\Models\TreartmentOption  $treartmentOption
     * @return \Illuminate\Http\Response
     */
    public function show(TreatmentOption $treartmentOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TreartmentOption  $treartmentOption
     * @return \Illuminate\Http\Response
     */
    public function edit(TreatmentOption $treartmentOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TreartmentOption  $treartmentOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TreatmentOption $treartmentOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TreartmentOption  $treartmentOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(TreatmentOption $treartmentOption)
    {
        //
    }
}
