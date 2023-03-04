<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRiskLevelRequest;
use App\Models\RiskLevel;
use Illuminate\Http\Request;

class RiskLevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.risk_levels.index')->only('index');
        $this->middleware('can:admin.risk_levels.create')->only('create');
        $this->middleware('can:admin.risk_levels.edit')->only('edit');
    }
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
        return view('risk_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskLevelRequest $request)
    {
        RiskLevel::create($request->validated());
        return redirect()->route('risk_levels.index')->with(['message' => 'Nivel de riesgo creado']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RiskLevel  $riskLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(RiskLevel $risk_level)
    {
        return view('risk_levels.edit', compact('risk_level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RiskLevel  $riskLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RiskLevel $risk_level)
    {
        
    }
}
