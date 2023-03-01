<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BiaProcessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ImpactLevelController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ProbabilityLevelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductScoreAverageController;
use App\Http\Controllers\ProductScoreController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RiskLevelController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\StatusRiskController;
use App\Http\Controllers\TreatmentOptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard'); //Redirecciona al dashboard
});

Auth::routes();

Route::middleware([
    'auth'
])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    //Rutas para cambiar contraseña
    Route::get('change_password', [App\Http\Controllers\HomeController::class, 'change_password'])->name('change_password');
    Route::post('update_password', [App\Http\Controllers\HomeController::class, 'update_password'])->name('update_password');


    //Rutas para gestionar departamentos
    Route::resource('departments', DepartmentController::class)->names('departments');
    //Rutas para gestionar roles
    Route::resource('roles', RoleController::class)->names('roles');
    //Rutas para gestionar Usuarios
    Route::resource('users', UserController::class)->names('users');
    //Rutas para gestionar categorías de productos/servicios
    Route::resource('categories',CategoryController::class)->names('categories');
    //Rutas para gestionar productos
    Route::resource('products',ProductController::class)->names('products');


    //Rutas para gestionar BIAs
    Route::resource('bias',BiaProcessController::class)->names('bias');
    //Ver productos de BIA
    Route::get('bia/{id}/products',[BiaProcessController::class,'verProductos'])->name('verproductos');
    //Gestionar BIA
    Route::get('bia/{id}/gestionar',[BiaProcessController::class,'gestionar'])->name('gestbia');
    
    //Empieza proceso de calificar Prod-Servicios
    Route::get('bia/{id}/calific',[ProductScoreController::class,'calific'])->name('calific');
    //Deten el proceso de calificar Prod-Servicios
    Route::get('bia/{id}/detener_calif',[ProductScoreController::class,'detener_calif'])->name('detener_calif');
    //Obtener promedios de calificaciones Prod-Servicios
    Route::get('bia/{id}/averagescore', [ProductScoreController::class, 'sacar_promedio'])->name('bia.averagescore');
    //Termina el proceso del BIA
    Route::get('bia/{bia}/finalizar_bia', [BiaProcessController::class, 'finalizar_bia'])->name('bias.finalizar');

    //Calificaciones de productos por usuario
    Route::get('bia/{id}/productoscalificados',[ProductScoreController::class,'calificacionesComite'])->name('calificaciones.comite');
    //Calificar Prod-Servicios COMITÉ
    Route::get('bia/{id}/calificar', [ProductScoreController::class, 'calificar'])->name('calificar');
    //Guarda calificación de Producto-Servicio
    Route::post('bia/{id}/guardar/producto',[BiaProcessController::class, 'guardar_calificacion'])->name('bias.store.product');
    



    //Ver promedios de calificaciones
    Route::get('bia/{id}/verpromedios',[ProductScoreAverageController::class, 'ver_promedios'])->name('promedios.index');
    //Formulario para determinar si un producto es crítico o no
    Route::get('bia/avergarescore/{productScoreAverage}/edit', [ProductScoreAverageController::class, 'edit'])->name('averagescore.edit');
    //Guarda cambio de producto critico si/no
    Route::put('bia/avergarescore/{productScoreAverage}/update', [ProductScoreAverageController::class, 'update'])->name('averagescore.update');
    //Forumalio para asignar producto crítico a un usuario
    Route::get('bia/criticalproduct/{id}/asign',[ProductScoreAverageController::class, 'asignar_producto'])->name('productcritical.asign');
    //Guarda asignacion de producto crítico a usuario
    Route::put('bia/criticalproduct/{productoScore}/storeasign',[ProductScoreAverageController::class, 'guardar_asignacion'])->name('productcritical.storeasign');
    
    //Ruta para ver actividades de productos críticos
    Route::get('bia/{bia_id}/criticalproduct/{product_id}/activities',[ActivityController::class,'index'])->name('activities.index');
    //Ruta para el formulario crear una actividad de producto crítico
    Route::get('bia/{bia_id}/criticalproduct/{product}/createactivity',[ActivityController::class,'create'])->name('activities.create');
    //Guarda actividad de un producto crítico
    Route::post('criticalproduct/storeactivity', [ActivityController::class, 'store'])->name('activities.store');
    //Formulario para cambiar si una actividad es crítica
    Route::get('activities/{activity}/edit',[ActivityController::class,'edit'])->name('activities.edit');
    //Actualiza los campos de una actividad crítica
    Route::put('activities/{activity}/update',[ActivityController::class,'update'])->name('activities.update');


    
    //Rutas para gestionar Parametros
    Route::resource('parameters',ParameterController::class)->names('parameters');
    //Rutas para gestionar Niveles
    Route::resource('levels',LevelController::class)->names('levels');
    //Rutas para gestionar Criterios
    Route::resource('criterias', CriteriaController::class)->names('criterias');


    //Rutas para matriz de riesgos
    //Rtuas para gestionar Fuentes
    Route::resource('sources', SourceController::class)->names('sources');

    Route::resource('treatmentoptions', TreatmentOptionController::class)->names('treatmentoptions');

    Route::resource('impact_levels', ImpactLevelController::class)->names('impact_levels');

    Route::resource('probability_levels', ProbabilityLevelController::class)->names('probability_levels');

    Route::resource('risk_levels', RiskLevelController::class)->names('risk_levels');

    Route::resource('causes', CauseController::class)->names('causes');

    Route::resource('status_risks', StatusRiskController::class)->names('status_risks');

    //Rutas para reportes
    Route::prefix('report')->group(function () {
        Route::get('rolespdf', [ReportController::class, 'report_roles_pdf'])->name('roles.pdf');
        Route::get('rolesexcel', [ReportController::class, 'report_roles_excel'])->name('roles.excel');
        Route::get('productosbia/{bia_id}/excel',[ReportController::class, 'report_productos_bia_excel'])->name('productosbia.excel');
        Route::get('productosbia/{bia_id}/pdf',[ReportController::class, 'report_productos_bia_pdf'])->name('productosbia.pdf');
        Route::get('scoreaverageproducts/{bia_id}/excel',
                    [ReportController::class, 'report_scoreaverage_bia_excel'])
                    ->name('scoreaveragebia.excel');
        Route::get('criticalproduct/{bia_id}/excel',
                    [ReportController::class, 'report_critical_products_excel'])
                    ->name('criticalproducts.excel');
        Route::get('actividadescriticas/{id_producto}/excel', [ReportController::class, 'report_actividades_criticas_bia'])->name('actividadescriticas.excel');
    });
});
