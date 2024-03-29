<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Administrador']); //Cod 1
        $director = Role::create(['name' => 'Director']); //Cod 2
        $comite = Role::create(['name' => 'Comite']); //Cod 3
        $jefe_de_area = Role::create(['name' => 'Dueño de proceso']); //Cod 4
        $auditor = Role::create(['name' => 'Auditor']); //Cod 5

        //Permisos para gestionar departamentos OK
        Permission::create([
            'name' => 'admin.departments.index',
            'description' => 'Ver departamentos'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.departments.create',
            'description' => 'Crear departamentos'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.departments.edit',
            'description' => 'Editar departamentos'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar roles OK
        Permission::create([
            'name' => 'admin.roles.index',
            'description' => 'Ver roles'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.roles.create',
            'description' => 'Crear rol'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.roles.edit',
            'description' => 'Editar rol'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.roles.destroy',
            'description' => 'Eliminar rol'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar usuarios OK
        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver usuarios'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.users.create',
            'description' => 'Crear usuarios'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Editar usuarios'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar el Bia OK
        Permission::create([
            'name' => 'admin.bia_process.index',
            'description' => 'Ver BIAs'
        ])->syncRoles([$admin, $director, $comite, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.bia_process.create',
            'description' => 'Crear BIA'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.bia_process.edit',
            'description' => 'Editar BIA'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.bia_process.gestion',
            'description' => 'Gestionar BIA'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.bia_process.ver_prod',
            'description' => 'Ver productos del BIA'
        ])->syncRoles([$admin, $director, $comite, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.bia_process.cal_prod',
            'description' => 'Calificar productos del BIA (COMITÉ)'
        ])->syncRoles([$comite]);

        //Permisos para gestionar productos con calificaciones promediadas OK
        Permission::create([
            'name' => 'admin.product_score_avg.index',
            'description' => 'Ver calificaciones de Productos promediada'
        ])->syncRoles([$admin, $director, $comite, $auditor]);
        Permission::create([
            'name' => 'admin.prod_score_avg.edit',
            'description' => 'Editar si producto/servicio es crítico'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.critic_product.asign',
            'description' => 'Asignar productos críticos'
        ])->syncRoles([$admin, $director]);
        //Ver todos los productos críticos
        Permission::create([
            'name' => 'admin.critic_product.index_general',
            'description' => 'Ver todos los productos críticos'
        ])->syncRoles([$admin, $director, $auditor]);

        //Permisos para gestionar actividades OK
        Permission::create([
            'name' => 'admin.activities.index',
            'description' => 'Ver Actividades de productos críticos'
        ])->syncRoles([$admin, $auditor, $comite, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.activities.create',
            'description' => 'Crear Actividades de productos críticos'
        ])->syncRoles([$jefe_de_area, $director, $admin]);
        Permission::create([
            'name' => 'admin.activities.edit',
            'description' => 'Editar Actividades de productos críticos'
        ])->syncRoles([$jefe_de_area, $director, $admin]);

        //Permisos para gestionar categorías de productos OK
        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver categorías',
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear categoría'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar categoría'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar niveles OK
        Permission::create([
            'name' => 'admin.levels.index',
            'description' => 'Ver niveles de calificacion BIA',
        ])->syncRoles([$admin, $director, $comite, $auditor]);
        Permission::create([
            'name' => 'admin.levels.create',
            'description' => 'Crear nivel de calificacion BIA'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.levels.edit',
            'description' => 'Editar nivel de calificacion BIA'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar parámetros OK
        Permission::create([
            'name' => 'admin.parameters.index',
            'description' => 'Ver parametros',
        ])->syncRoles([$admin, $director, $comite, $auditor]);
        Permission::create([
            'name' => 'admin.parameters.create',
            'description' => 'Crear parametro'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.parameters.edit',
            'description' => 'Editar parametro'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar criterios OK
        Permission::create([
            'name' => 'admin.criterias.index',
            'description' => 'Ver criterios',
        ])->syncRoles([$admin, $director, $comite, $auditor]);
        Permission::create([
            'name' => 'admin.criterias.create',
            'description' => 'Crear criterio'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.criterias.edit',
            'description' => 'Editar criterio'
        ])->syncRoles([$admin, $director]);

        //Permisos para gestionar productos/servicios
        Permission::create([
            'name' => 'admin.products.index',
            'description' => 'Ver productos/servicios',
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.products.create',
            'description' => 'Crear producto/servicio'
        ])->syncRoles([$admin, $director]);
        Permission::create([
            'name' => 'admin.products.edit',
            'description' => 'Editar producto/servicio'
        ])->syncRoles([$admin, $director]);

        //Permisos para Matriz de riegos
        //Riesgos
        Permission::create([
            'name' => 'admin.risks.index',
            'description' => 'Ver riesgos',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.risks.create',
            'description' => 'Crear riesgo'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.risks.edit',
            'description' => 'Editar riesgo'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.risks.show',
            'description' => 'Ver riesgo'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        
        //Causas o Amenazas
        Permission::create([
            'name' => 'admin.causes.index',
            'description' => 'Ver causas',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.causes.create',
            'description' => 'Crear causa'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.causes.edit',
            'description' => 'Editar causa'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Fuentes
        Permission::create([
            'name' => 'admin.sources.index',
            'description' => 'Ver fuentes de riesgos',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.sources.create',
            'description' => 'Crear fuente de riesgos'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.sources.edit',
            'description' => 'Editar fuente de riesgos'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Opciones de tratamiento
        Permission::create([
            'name' => 'admin.treatment_options.index',
            'description' => 'Ver opciones de tratamiento',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.treatment_options.create',
            'description' => 'Crear opcion de tratamiento'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.treatment_options.edit',
            'description' => 'Editar opcion de tratamiento'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Niveles de impacto
        Permission::create([
            'name' => 'admin.impact_levels.index',
            'description' => 'Ver niveles de impacto',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.impact_levels.create',
            'description' => 'Crear nivel de impacto'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.impact_levels.edit',
            'description' => 'Editar nivel de impacto'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Niveles de probabilidad
        Permission::create([
            'name' => 'admin.probability_levels.index',
            'description' => 'Ver niveles de probabilidad',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.probability_levels.create',
            'description' => 'Crear nivel de probabilidad'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.probability_levels.edit',
            'description' => 'Editar nivel de probabilidad'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Niveles de riesgo
        Permission::create([
            'name' => 'admin.risk_levels.index',
            'description' => 'Ver niveles de riesgo',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.risk_levels.create',
            'description' => 'Crear nivel de riesgo'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.risk_levels.edit',
            'description' => 'Editar nivel de riesgo'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Estados de tratamiento
        Permission::create([
            'name' => 'admin.risk_treatment_status.index',
            'description' => 'Ver estados de tratamiento',
        ])->syncRoles([$admin, $director, $jefe_de_area, $auditor]);
        Permission::create([
            'name' => 'admin.risk_treatment_status.create',
            'description' => 'Crear estado de tratamiento'
        ])->syncRoles([$admin, $director, $jefe_de_area]);
        Permission::create([
            'name' => 'admin.risk_treatment_status.edit',
            'description' => 'Editar estado de tratamiento'
        ])->syncRoles([$admin, $director, $jefe_de_area]);

        //Permiso para ver logs
        Permission::create([
            'name' => 'admin.logs.index',
            'description' => 'Ver Logs'
        ])->syncRoles([$admin, $director]);
        //Permiso para ver reportes
        Permission::create([
            'name' => 'admin.reports.index',
            'description' => 'Ver reporte general'
        ])->syncRoles([$admin, $director]);
    }
}
