<?php

namespace App\Http\Controllers;

use App\Exports\CriticActivitiesExport;
use App\Exports\CriticalProductExport;
use App\Exports\ProductsExport;
use App\Exports\RolesExport;
use App\Exports\ScoreAverageExport;
use App\Models\BiaProcess;
use App\Models\Product;
use App\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function report_roles_pdf()
    {
        $user = Auth::user();
        $nombreCompleto = $user->last_name . ' ' . $user->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $roles = Role::with('permissions:id,description')->get();
        $pdf = Pdf::loadView('pdf.roles', compact('roles', 'nombreCompleto', 'fecha', 'hora'));
        return $pdf->download($fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Roles.pdf');
    }

    public function report_roles_excel()
    {
        $user = Auth::user();
        $nombreCompleto = $user->last_name . ' ' . $user->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new RolesExport, $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Roles.xlsx');
    }

    public function report_productos_bia_excel($bia_id)
    {
        $bia = BiaProcess::find($bia_id);
        $ids = $bia->products->pluck('id');
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new ProductsExport($ids), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Productos.xlsx');

    }

    public function report_productos_bia_pdf($bia_id)
    {
        $bia = BiaProcess::find($bia_id);
        $ids = $bia->products->pluck('id');
        $productos = Product::with(['category:id,name'])->findMany($ids);
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        $pdf = Pdf::loadView('pdf.products', compact('nombreCompleto', 'fecha', 'hora', 'productos'))->output();
        return response()->streamDownload(
            fn () => print($pdf),
            $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' Módulo Productos.pdf'
        );

    }

    public function report_actividades_criticas_bia($id_producto)
    {
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new CriticActivitiesExport($id_producto), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' actividades criticas.xlsx');
    }

    public function report_scoreaverage_bia_excel($bia_id)
    {
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new ScoreAverageExport($bia_id), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' promedio de calificaciones BIA.xlsx');
    }

    public function report_critical_products_excel($bia_id)
    {
        $usuario = Auth::user();
        $nombreCompleto = $usuario->last_name . ' ' . $usuario->name;
        $fecha = Carbon::now()->format('d-m-Y');
        $hora = Carbon::now()->format('H:i');
        return Excel::download(new CriticalProductExport($bia_id), $fecha . ' ' . $hora . ' ' . $nombreCompleto . ' productos críticos BIA.xlsx');
    }

    public function reporte_bias()
    {
        $bias = BiaProcess::where([['estado_id', 5]])->paginate(10);
        return view('bias.reportes', compact('bias'));
    }
}
