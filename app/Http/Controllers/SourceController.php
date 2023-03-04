<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSourceRequest;
use App\Http\Requests\UpdateSourceRequest;
use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.sources.index')->only('index');
        $this->middleware('can:admin.sources.create')->only('create');
        $this->middleware('can:admin.sources.edit')->only('edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sources.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSourceRequest $request)
    {
        Source::create($request->validated());
        return redirect()->route('sources.index')->with(['message' => 'Fuente creada exitosamente', 'typo' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        return view('sources.edit', compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSourceRequest $request, Source $source)
    {
        $source->update($request->validated());
        return redirect()->route('sources.index')->with(['message' => 'Fuente actualizada exitosamente', 'typo' => 'success']);
    }

}
