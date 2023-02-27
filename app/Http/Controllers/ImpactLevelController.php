<?php

namespace App\Http\Controllers;

use App\Models\ImpactLevel;
use Illuminate\Http\Request;

class ImpactLevelController extends Controller
{
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImpactLevel  $impactLevel
     * @return \Illuminate\Http\Response
     */
    public function show(ImpactLevel $impactLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImpactLevel  $impactLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(ImpactLevel $impactLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImpactLevel  $impactLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImpactLevel $impactLevel)
    {
        //
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
