<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBiaRequest;
use App\Http\Requests\UpdateBiaRequest;
use App\Models\BiaProcess;
use App\Models\Product;
use Illuminate\Http\Request;

class BiaProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Product::with('category:id,name')->where('status',1)->get();
        //return  json_encode($productos);
        return view('bias.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBiaRequest $request)
    {
        $bia = BiaProcess::create($request->validated());
        $bia->products()->sync($request->input('products',[]));
        return view('bias.index')->with(['message' => 'BIA Creado', 'typo' => 'success']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BiaProcess  $biaProcess
     * @return \Illuminate\Http\Response
     */
    public function edit(BiaProcess $bia)
    {
        $productos = Product::with('category:id,name')->where('status',1)->get();
        return view('bias.edit',compact('productos','bia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiaProcess  $biaProcess
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBiaRequest $request, BiaProcess $bia)
    {
        $bia->update($request->validated());
        $bia->products()->sync($request->input('products',[]));
        return view('bias.index')->with(['message' => 'BIA Actualizado', 'typo' => 'success']);
    }

    public function verProductos(Request $request, $id)
    {
        $bia = BiaProcess::find($id);
        $nombreBia = $bia->name;
        $ids = $bia->products->pluck('id');
        $productos = Product::with('category:id,name')->findMany($ids);
        return view('bias.products',compact(['nombreBia','productos']));

    }

}
