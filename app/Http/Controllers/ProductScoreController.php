<?php

namespace App\Http\Controllers;

use App\Exceptions\BiaEstadoDifException;
use App\Models\BiaProcess;
use App\Models\Level;
use App\Models\Parameter;
use App\Models\ProductScore;
use App\Models\ProductScoreAverage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    * Habilita el proceso de calificación
    * de productos/servicios
    * Es decir pasa al estado
    * 
    * @param integer $bia_id
    * @return string $respuesta
    */

   public function calific($id)
   {
      $bia = BiaProcess::find($id);
      $estado_BIA = $bia->estado_id;

      if ($estado_BIA == 1) {
         $bia->estado_id = 2;
         $bia->save();
         return true;
      } else {
         throw new BiaEstadoDifException('<p>Este BIA ya se encuentra en un paso superior, por lo que <strong>no</strong> puede regresar</p>');
      }
   }

   /**
    * Detiene el proceso de calificación
    * de productos/servicios
    * Es decir pasa al estado 
    * 
    * @param integer $bia_id
    * @return string $respuesta
    */

   public function detener_calif($id)
   {
      $bia = BiaProcess::find($id);
      $estado_BIA = $bia->estado_id;

      switch ($estado_BIA) {
         case 1:
            throw new BiaEstadoDifException('<p>Para pasar al siguiente paso, primero debe dar click en <strong>Habilitar Calificación de productos/Servicios</strong></p>');
            break;
         case 2:
            $bia->estado_id = 3;
            $bia->save();
            return true;
            break;
         default:
            throw new BiaEstadoDifException('<p>Este BIA ya se encuentra en un paso superior, por lo que <strong>no</strong> puede regresar</p>');
            break;
      }
   }

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

      $bia = BiaProcess::find($bia_id);
      $estado_BIA = $bia->estado_id;

      switch ($estado_BIA) {
         case 1:
            throw new BiaEstadoDifException('<p>Para pasar al siguiente paso, primero debe dar click en <strong>Habilitar Calificación de productos/Servicios</strong></p>');
            break;
         case 2:
            throw new BiaEstadoDifException('<p>Para pasar al siguiente paso, primero debe dar click en <strong>Cerrar calificación Productos/Servicios críticos</strong></p>');
            break;
         case 3:
            $productos = ProductScore::select('bia_id', 'product_id', DB::raw('ROUND(AVG(total_score),0) as score_average'))
               ->where('bia_id', $bia_id)
               ->groupBy('product_id', 'bia_id')->get();

            foreach ($productos as $product) {
               $es_critico = $product->score_average >= 12;
               ProductScoreAverage::create(
                  [
                     'bia_process_id' => $bia_id,
                     'product_id' => $product->product_id,
                     'total_score' => $product->score_average,
                     'is_critical' => $es_critico,
                     'user_asigned' => null
                  ]
               );
            }
            $bia->estado_id = 4;
            $bia->save();
            return true;
            break;
         default:
            throw new BiaEstadoDifException('<p>Este BIA ya se encuentra en un paso superior, por lo que <strong>no</strong> puede regresar</p>');
            break;
      }
      //$ids_personas_calif = ProductScore::select('user_id')->distinct()->get()->pluck('user_id');
      //$ids_personas_no_calif = [];
      //return json_encode(['data' => $productos, 'id' => $ids_personas_calif]);
   }

   public function calificacionesComite(Request $request, $id)
   {
      $bia = BiaProcess::find($id);
      $num_products_bia = $bia->products()->count();
      $num_products_cal = ProductScore::where([['bia_id', $id], ['user_id', Auth::user()->id]])->get()->count();
      $productos_calificados = ProductScore::where([['bia_id', $id], ['user_id', Auth::user()->id]])
         ->with(
            [
               'product:id,name',
               'parameterScores:product_score_id,id,score,parameter_id',
               'parameterScores.parameter:id,name'
            ]
         )->paginate(10);
      return view('bias.calificomite', compact('bia', 'productos_calificados', 'num_products_bia', 'num_products_cal'));
   }


   public function calificar(Request $request, $id)
   {
      $productos_ya_calificados = ProductScore::pluck('id');
      $productos = BiaProcess::find($id)
         ->products()
         ->with('category:id,name')
         ->whereNotIn('product_id', $productos_ya_calificados)
         ->get();
      $parametros = Parameter::where([['bia_id', $id], ['status', true]])->select(['id', 'name'])->get();
      $niveles = Level::where([['bia_id', $id], ['status', true]])->select(['id', 'value', 'name'])->get();
      //return json_encode($productos);
      return view('bias.calificarproducto', compact('productos', 'id', 'parametros', 'niveles'));
   }
}
