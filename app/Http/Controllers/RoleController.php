<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create');
        $this->middleware('can:admin.roles.edit')->only('edit');
    }

    public function index()
    {
        return view('roles.index');
    }

    public function create()
    {
        $permisos = Permission::all();
        return view('roles.create', compact('permisos'));
    }
 
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->validated());
        $role->syncPermissions($request->permisos);
        return redirect()->route('roles.index')->with(['message' => 'Producto Creado', 'typo' => 'success']);
    }

    public function edit($id)
    {
        $permisos = Permission::all(); //Obtengo todos los permisos
        $rol = Role::find($id); //Recupero la info del rol
        return view('roles.edit',compact('rol','permisos')); //Envío todo a la visra roles.edit
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->validated());
        $role->syncPermissions($request->permisos);
        return redirect()->route('roles.index')->with(['message' => 'Producto Creado', 'typo' => 'success']);
    }
}
