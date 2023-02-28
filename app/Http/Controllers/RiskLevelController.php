<?php

namespace App\Http\Controllers;

use App\Models\RiskLevel;
use Illuminate\Http\Request;

class RiskLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('risk_levels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RiskLevel  $riskLevel
     * @return \Illuminate\Http\Response
     */
    public function show(RiskLevel $riskLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskLevel  $riskLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskLevel $riskLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiskLevel  $riskLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RiskLevel $riskLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RiskLevel  $riskLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RiskLevel $riskLevel)
    {
        //
    }
}
