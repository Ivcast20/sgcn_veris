<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAverageScoreProduct;
use App\Http\Requests\UpdateProductStorageAvgRequest;
use App\Mail\CriticProductAsignedMailable;
use App\Models\BiaProcess;
use App\Models\ProductScoreAverage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ProductScoreAverageController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.product_score_avg.index')->only('ver_promedios');
        $this->middleware('can:admin.prod_score_avg.edit')->only('edit');
        $this->middleware('can:admin.critic_product.asign')->only('asignar_producto');
    }

    public function edit(ProductScoreAverage $productScoreAverage)
    {
        return view('average_score_product.edit', compact('productScoreAverage'));
    }


    public function update(UpdateAverageScoreProduct $request, ProductScoreAverage $productScoreAverage)
    {
        $productScoreAverage->update($request->validated());
        return redirect()->route('promedios.index', $productScoreAverage->bia_process_id)->with(['message' => 'Se ha actualizado el resultado de este producto', 'typo' => 'success']);
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
        $usuario = Auth::user();
        if($usuario->hasPermissionTo('admin.critic_product.index_general'))
        {
            $productos_criticos = ProductScoreAverage::with(
                [
                    'product:id,name,category_id' => ['category:id,name'],
                    'user:id,name,last_name,cargo'
                ]
                )->where([['bia_process_id', $id],['is_critical',true]])->get();
        }else{
            $productos_criticos = ProductScoreAverage::with(
                [
                    'product:id,name,category_id' => ['category:id,name'],
                    'user:id,name,last_name,cargo'
                ]
                )->where([['bia_process_id', $id],['is_critical',true], ['user_asigned', $usuario->id]])->get();
        }
        
        return view('bias.promedios', compact('productos_promediados', 'bia', 'productos_criticos'));
    }

    public function asignar_producto($id)
    {
        $productoCritico = ProductScoreAverage::with('product:id,name,category_id','product.category:id,name')->find($id);
        $usuarios_responsables = User::permission('admin.activities.create')->orderBy('last_name','asc')->get();
        return view('bias.criticalproduct.asignar', compact('productoCritico','usuarios_responsables'));
    }

    public function guardar_asignacion(UpdateProductStorageAvgRequest $request, ProductScoreAverage $productoScore)
    {
        $productoScore->update($request->validated());
        $usuario = User::find($request->safe()->only('user_asigned'))->first();
        
        Mail::to($usuario)->queue(new CriticProductAsignedMailable($usuario,
                                                                $productoScore->product->name,
                                                                $productoScore->product->category->name,
                                                                $productoScore->bia->name));
        return redirect()->route('promedios.index',$productoScore->bia_process_id)->with(['message' => 'Se ha asignado un responsable', 'typo' => 'success']);
    }
}
