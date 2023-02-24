<?php

namespace App\Http\Controllers;

use App\Exports\RolesExport;
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
}
