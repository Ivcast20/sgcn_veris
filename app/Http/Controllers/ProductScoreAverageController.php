<?php

namespace App\Http\Controllers;

use App\Models\BiaProcess;
use App\Models\ProductScoreAverage;
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
      return view('bias.promedios', compact('productos_promediados', 'bia'));
   }
}
