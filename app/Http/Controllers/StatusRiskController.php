<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusRiskRequest;
use App\Http\Requests\UpdateStatusRiskRequest;
use App\Models\StatusRisk;
use Illuminate\Http\Request;

class StatusRiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('status_risk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status_risk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRiskRequest $request)
    {
        StatusRisk::create($request->validated());
        return redirect()->route('status_risks.index')->with(['message' => 'Estado de Tratamiento agregado']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusRisk  $statusRisk
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusRisk $status_risk)
    {
        return view('status_risk.edit', compact('status_risk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatusRisk  $statusRisk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusRiskRequest $request, StatusRisk $status_risk)
    {
        $status_risk->update($request->validated());
        return redirect()->route('status_risks.index')->with(['message' => 'Estado de Tratamiento actualizado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusRisk  $statusRisk
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusRisk $statusRisk)
    {
        //
    }
}
