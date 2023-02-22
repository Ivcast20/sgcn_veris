<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductStorageAvgRequest;
use App\Models\BiaProcess;
use App\Models\ProductScoreAverage;
use App\Models\User;
use Illuminate\Http\Request;

class ProductScoreAverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ProductScoreAverage  $productScoreAverage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductScoreAverage $productScoreAverage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductScoreAverage  $productScoreAverage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductScoreAverage $productScoreAverage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductScoreAverage  $productScoreAverage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductScoreAverage $productScoreAverage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductScoreAverage  $productScoreAverage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductScoreAverage $productScoreAverage)
    {
        //
    }

    public function ver_promedios($id)
    {
        $bia = BiaProcess::find($id);
        $productos_promediados = ProductScoreAverage::with(
            [
                'product:id,name,category_id' => ['category:id,name']
            ]
        )
            ->where('bia_process_id', $id)->paginate(5);
        $productos_criticos = ProductScoreAverage::with(
            [
                'product:id,name,category_id' => ['category:id,name'],
                'user:id,name,last_name,cargo'
            ]
        )
            ->where([['bia_process_id', $id],['is_critical',true]])->get();
        //return dd($productos_criticos);
        return view('bias.promedios', compact('productos_promediados', 'bia', 'productos_criticos'));
    }

    public function asignar_producto($id)
    {
        $productoCritico = ProductScoreAverage::with('product:id,name,category_id','product.category:id,name')->find($id);
        $usuarios_responsables = User::permission('admin.activities.create')->orderBy('last_name','asc')->get();
        //return json_encode($productoCritico);
        return view('bias.criticalproduct.asignar', compact('productoCritico','usuarios_responsables'));
    }

    public function guardar_asignacion(UpdateProductStorageAvgRequest $request, ProductScoreAverage $productoScore)
    {
        $productoScore->update($request->validated());
        return redirect()->route('promedios.index',$productoScore->bia_process_id)->with(['message' => 'Se ha asignado un responsable', 'typo' => 'success']);
    }
}
