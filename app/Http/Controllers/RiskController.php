<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRiskRequest;
use App\Http\Requests\UpdateRiskRequest;
use App\Models\BiaProcess;
use App\Models\Cause;
use App\Models\Department;
use App\Models\ImpactLevel;
use App\Models\ProbabilityLevel;
use App\Models\Risk;
use App\Models\Source;
use App\Models\StatusRisk;
use App\Models\TreatmentOption;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.risks.index')->only('index');
        $this->middleware('can:admin.risks.create')->only('create');
        $this->middleware('can:admin.risks.show')->only('show');
        $this->middleware('can:admin.risks.edit')->only('edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('risks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bias = BiaProcess::where('estado_id', 5)->get();
        $causes = Cause::where('status', true)->select('name','id')->get();
        $sources = Source::where('status', true)->select('name','id')->get();
        $treatment_options = TreatmentOption::where('status', true)->select('strategy', 'id')->get();
        $departments = Department::where('status', true)->get();
        $probability_levels = ProbabilityLevel::where('status', true)->get();
        $impact_levels = ImpactLevel::where('status', true)->get();
        $status_risk = StatusRisk::where('status', true)->pluck('name','id');
        return view('risks.create', compact('bias', 'causes', 'sources', 'treatment_options', 'departments', 'probability_levels', 'impact_levels', 'status_risk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRiskRequest $request)
    {
        $datos_validados = $request->validated();
        $ultimo_riesgo = Risk::orderBy('created_at', 'DESC')->first();
        $codigo_ultimo = 1;
        if($ultimo_riesgo)
        {
            $codigo_ultimo = $ultimo_riesgo->id + 1;     
        }
        $codigo = 'CN-' . sprintf("%02d", $codigo_ultimo);
        $datos = array_merge($datos_validados, ['code' => $codigo]);
        $riesgo = Risk::create($datos);
        $riesgo->causes()->attach($request->input('causes', []));
        $riesgo->departments()->attach($request->input('departments', []));
        return redirect()->route('risks.index')->with(['message' => 'Riesgo guardado exitosamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function show(Risk $risk)
    {
        return view('risks.show', compact('risk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function edit(Risk $risk)
    {
        // $causes = Cause::where('status', true)->select('name','id')->get();
        // $sources = Source::where('status', true)->select('name','id')->get();
        // $treatment_options = TreatmentOption::where('status', true)->select('strategy', 'id')->get();
        // $departments = Department::where('status', true)->get();
        // $probability_levels = ProbabilityLevel::where('status', true)->get();
        // $impact_levels = ImpactLevel::where('status', true)->get();
        // $status_risk = StatusRisk::where('status', true)->pluck('name','id');
        $bias = BiaProcess::where('estado_id', 5)->get();
        $causes = Cause::where('status', true)->select('name','id')->get();
        $sources = Source::where('status', true)->select('name','id')->get();
        $treatment_options = TreatmentOption::where('status', true)->select('strategy', 'id')->get();
        $departments = Department::where('status', true)->get();
        $probability_levels = ProbabilityLevel::where('status', true)->get();
        $impact_levels = ImpactLevel::where('status', true)->get();
        $status_risk = StatusRisk::where('status', true)->pluck('name','id');

        return view('risks.edit', compact('bias', 'causes', 'sources', 'treatment_options', 'departments', 'probability_levels', 'impact_levels', 'status_risk', 'risk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Risk  $risk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRiskRequest $request, Risk $risk)
    {
        $risk->update($request->validated());
        $risk->causes()->sync($request->input('causes', []));
        return redirect()->route('risks.index')->with(['message' => 'Riesgo actualizado exitosamente']);
    }

}
