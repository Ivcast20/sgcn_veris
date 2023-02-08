<?php

namespace App\Http\Controllers;

use App\Exceptions\BiaEstadoDifException;
use App\Http\Requests\StoreBiaRequest;
use App\Http\Requests\StoreScoreProductRequest;
use App\Http\Requests\UpdateBiaRequest;
use App\Models\BiaProcess;
use App\Models\Level;
use App\Models\Parameter;
use App\Models\ParameterScore;
use App\Models\Product;
use App\Models\ProductScore;
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
        $productos = Product::with('category:id,name')->where('status', 1)->get();
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
        $bia->products()->sync($request->input('products', []));
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
        $productos = Product::with('category:id,name')->where('status', 1)->get();
        return view('bias.edit', compact('productos', 'bia'));
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
        $bia->products()->sync($request->input('products', []));
        return view('bias.index')->with(['message' => 'BIA Actualizado', 'typo' => 'success']);
    }

    public function verProductos(Request $request, $id)
    {
        $bia = BiaProcess::find($id);
        $nombreBia = $bia->name;
        $ids = $bia->products->pluck('id');
        $productos = Product::with('category:id,name')->findMany($ids);
        return view('bias.products', compact(['nombreBia', 'productos']));
    }

    public function gestionar(Request $request, $id)
    {
        $bia = BiaProcess::find($id);
        return view('bias.gestion', compact(['bia']));
    }

    public function calific(Request $request, $id)
    {
        $bia = BiaProcess::find($id);
        $estado_BIA = $bia->estado_id;

        if ($estado_BIA == 1) {
            $bia->estado_id = 2;
            $bia->save();
            return true;
        } else {
            throw new BiaEstadoDifException('Ya se puede calificar los productos de este BIA');
        }
    }

    public function calificacionesComite(Request $request, $id)
    {
        // $bia_estado = BiaProcess::where('id', $id)->first()->estado_id;
        $bia = BiaProcess::find($id);
        return view('bias.calificomite', compact('bia'));
    }

    public function calificar(Request $request, $id)
    {
        $productos_ya_calificados = ProductScore::pluck('id');
        $productos = BiaProcess::find($id)
                                ->products()
                                ->with('category:id,name')
                                ->whereNotIn('product_id',$productos_ya_calificados)
                                ->get();
        $parametros = Parameter::where([['bia_id', $id], ['status', true]])->select(['id', 'name'])->get();
        $niveles = Level::where([['bia_id', $id], ['status', true]])->select(['id', 'value', 'name'])->get();
        //return json_encode($productos);
        return view('bias.calificarproducto', compact('productos', 'id', 'parametros', 'niveles'));
    }

    public function guardar_calificacion(StoreScoreProductRequest $request, $id)
    {
        $calif_product = ProductScore::create($request->validated());
        $parametros_calif = $request->safe()->parametros;
        foreach ($parametros_calif as $key => $value) {
            ParameterScore::create(
                [
                    'parameter_id' => $key,
                    'product_score_id' => $calif_product->id,
                    'score' => $value
                ]
            );
        }

        return redirect()->route('calificaciones.comite', $id)->with(['message' => 'Producto Calificado', 'typo' => 'success']);
    }
}
