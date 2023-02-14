<?php

namespace App\Http\Controllers;

use App\Models\ProductScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductScore  $productScore
     * @return \Illuminate\Http\Response
     */
    // public function show(ProductScore $productScore)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductScore  $productScore
     * @return \Illuminate\Http\Response
     */
    // public function edit(ProductScore $productScore)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductScore  $productScore
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, ProductScore $productScore)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductScore  $productScore
     * @return \Illuminate\Http\Response
     */
    // public function destroy(ProductScore $productScore)
    // {
    //     //
    // }

    /**
     * Saca los promedios de los productos del BIA especificado
     * Si la calificación promedio es mayor o igual a 12
     * se lo denomina crítico
     * 
     * @param integer $bia_id
     * @return string $respuesta
     */

     public function sacar_promedio($bia_id)
     {
        $productos = ProductScore::with('product:id,name')
                                ->select('bia_id','product_id',DB::raw('ROUND(AVG(total_score),0) as score_average'))
                                ->where('bia_id',$bia_id)
                                ->groupBy('product_id','bia_id')->get();
        $ids_personas_calif = ProductScore::select('user_id')->distinct()->get()->pluck('user_id');
        $ids_personas_no_calif = [];
        return json_encode(['data' => $productos, 'id' => $ids_personas_calif]);
     }
}
