<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCauseRequest;
use App\Http\Requests\UpdateCauseRequest;
use App\Models\Cause;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('causes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('causes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCauseRequest $request)
    {
        Cause::create($request->validated());
        return redirect()->route('causes.index')->with(['message' => 'Causa ingresada exitosamente']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function edit(Cause $cause)
    {
        return view('causes.edit', compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCauseRequest $request, Cause $cause)
    {
        $cause->update($request->validated());
        return redirect()->route('causes.index')->with(['message' => 'Causa actualizada exitosamente']);
    }

}
