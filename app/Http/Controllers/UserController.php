<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\ChangePasswordMailable;
use App\Mail\NewUserMailable;
use App\Models\Department;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');
        $this->middleware('can:admin.users.create')->only('create');
        $this->middleware('can:admin.users.edit')->only('edit');        
    }
    
    public function index(): View {
        return view('users.index');
    }

    public function create(): View {
        $roles = Role::all();
        $departamentos = Department::where('status',1)->get();
        return view('users.create', compact('roles','departamentos'));
    }

    public function store(StoreUserRequest $request) {
        $datos_validados = $request->validated();
        $nuevo_usuario = User::create([
            'name' => $datos_validados['name'],
            'last_name' => $datos_validados['last_name'],
            'email' => $datos_validados['email'],
            'department_id' => $datos_validados['department_id'],
            'password' => Hash::make($datos_validados['password']),
            'cargo' => $datos_validados['cargo']
        ]);
        $nuevo_usuario->assignRole($request->roles);
        Mail::to($nuevo_usuario)->queue(new NewUserMailable($nuevo_usuario, $datos_validados['password'], config('app.url')));
        return redirect()->route('users.index')->with(['message' => 'Usuario guardado', 'typo' => 'success']);
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $departamentos = Department::where('status',1)->get();
        return view('users.edit', compact('user','roles','departamentos'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->syncRoles($request->roles);
        return redirect()->route('users.index')->with(['message' => 'Usuario Actualizado', 'typo' => 'success']);
    }

    public function change_password(User $user)
    {
        $new_password = Str::random(8);
        $user->update(['password' => Hash::make($new_password)]);
        Mail::to($user)->queue(new ChangePasswordMailable($user, $new_password));
        return redirect()->route('users.index')->with(['message' => 'Se ha reseteado la contraseña de este usuario', 'typo' => 'success']);
    }
}
