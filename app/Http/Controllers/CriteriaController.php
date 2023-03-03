<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCriteriaRequest;
use App\Models\BiaProcess;
use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.criterias.index')->only('index');
        $this->middleware('can:admin.criterias.create')->only('create');
        $this->middleware('can:admin.criterias.edit')->only('edit');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('criterias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criterias.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function show(Criteria $criteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function edit($criteria)
    {
        $criteria = Criteria::with(['level:id,name','parameter:id,name'])->find($criteria);
        return view('criterias.edit', compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCriteriaRequest $request, Criteria $criteria)
    {
        $criteria->update($request->validated());
        return redirect()->route('criterias.index')->with(['message' => 'Criterio actualizado correctamente', 'typo' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criteria $criteria)
    {
        //
    }
}
