<?php

use App\Http\Controllers\BiaProcessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductScoreAverageController;
use App\Http\Controllers\ProductScoreController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\ProductScore;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
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

    //Calificaciones de productos por usuario
    Route::get('bia/{id}/productoscalificados',[ProductScoreController::class,'calificacionesComite'])->name('calificaciones.comite');
    //Calificar Prod-Servicios COMITÉ
    Route::get('bia/{id}/calificar', [ProductScoreController::class, 'calificar'])->name('calificar');
    //Guarda calificación de Producto-Servicio
    Route::post('bia/{id}/guardar/producto',[BiaProcessController::class, 'guardar_calificacion'])->name('bias.store.product');
    //Ver promedios de calificaciones
    Route::get('bia/{id}/verpromedios',[ProductScoreAverageController::class, 'ver_promedios'])->name('promedios.index');



    //Rutas para gestionar Parametros
    Route::resource('parameters',ParameterController::class)->names('parameters');
    //Rutas para gestionar Niveles
    Route::resource('levels',LevelController::class)->names('levels');
    //Rutas para gestionar Criterios
    Route::resource('criterias', CriteriaController::class)->names('criterias');

    //Rutas para consultas del dashboard
    Route::get('usuarios-rol', [HomeController::class,'get_usuarios_x_rol'])->name('usuario.x.rol');
});
