<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    //Route::get('/users', [UserController::class,'index'])->name('users.index');
    //Rutas para gestionar categorías de productos/servicios
    Route::resource('categories',CategoryController::class)->names('categories');
});
