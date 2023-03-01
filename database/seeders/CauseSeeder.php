<?php

namespace Database\Seeders;

use App\Models\Cause;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cause::create([
            'name' => 'Terremoto',
        ]);
        Cause::create([
            'name' => 'Fenómeno del niño',
        ]);
        Cause::create([
            'name' => 'Erupción volcánica',
        ]);
        Cause::create([
            'name' => 'Caída de Cenizas',
        ]);
        Cause::create([
            'name' => 'Cortes de energía prolongados',
        ]);
        Cause::create([
            'name' => 'Fallas de generador',
        ]);
        Cause::create([
            'name' => 'Contaminación por fallas en la gestión de desechos',
        ]);
        Cause::create([
            'name' => 'Pandemia',
        ]);
        Cause::create([
            'name' => 'Incendio',
        ]);
        Cause::create([
            'name' => 'Inundaciones',
        ]);
        Cause::create([
            'name' => 'Accidentes',
        ]);
        Cause::create([
            'name' => 'Cierre de vías por mantenimientos/accidentes',
        ]);
        Cause::create([
            'name' => 'Huegas/Paros con cierre de vías',
        ]);
        Cause::create([
            'name' => 'Ataque informático',
        ]);
        Cause::create([
            'name' => 'Falla del proveedor de infraestructura en nube',
        ]);
        Cause::create([
            'name' => 'Falla en componentes de BD',
        ]);
        Cause::create([
            'name' => 'Caducidad de dominios',
        ]);
        Cause::create([
            'name' => 'Falla en servicios JBOSS',
        ]);
        Cause::create([
            'name' => 'Rebrotes de enfermedades contagiosas/virus',
        ]);
        Cause::create([
            'name' => 'Desabastecimiento de proveedores',
        ]);
        Cause::create([
            'name' => 'Problemas con fabricantes/importaciones',
        ]);
        Cause::create([
            'name' => 'Medicamentos/principios activos descontinuados',
        ]);
        Cause::create([
            'name' => 'Fallas de proveedor de servicios',
        ]);
        Cause::create([
            'name' => 'Fallas de equipos de comunicaciones',
        ]);
        Cause::create([
            'name' => 'Fallas eléctricas en centrales',
        ]);
        Cause::create([
            'name' => 'Paros/Huelgas/Conmoción interna',
        ]);
        Cause::create([
            'name' => 'Secuestro',
        ]);
        Cause::create([
            'name' => 'Amenaza de bomba',
        ]);
        Cause::create([
            'name' => 'Errores en supuestos de la factibilidad de apertura de nuevos puntos de atención',
        ]);
        Cause::create([
            'name' => 'Falta de control de gasto del presupuesto',
        ]);
        Cause::create([
            'name' => 'Falta de seguimiento en las renovaciones',
        ]);
        Cause::create([
            'name' => 'Desconocimiento de actualizaciones de normativas vigentes',
        ]);
        Cause::create([
            'name' => 'Proceso de QA inadecuado',
        ]);
        Cause::create([
            'name' => 'Proceso de desarrollo inadecuado',
        ]);
    }
}
