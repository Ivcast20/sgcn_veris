<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Models\BiaProcess;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.levels.index')->only('index');
        $this->middleware('can:admin.levels.create')->only('create');
        $this->middleware('can:admin.levels.edit')->only('edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('levels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bias = BiaProcess::where('status',true)->get();
        return view('levels.create', compact('bias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLevelRequest $request)
    {
        Level::create($request->validated());
        return redirect()->route('levels.index')->with(['message' => 'Nivel Creado', 'typo' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        $bias = BiaProcess::where('status',true)->get();
        return view('levels.edit', compact(['bias','level']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        $level->update($request->validated());
        return redirect()->route('levels.index')->with(['message' => 'Nivel Actualizado', 'typo' => 'success']);
    }

}
