<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Mail\NewUserMailable;
use App\Models\Department;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View {
        return view('users.index');
    }

    public function create(): View {
        $roles = Role::all();
        $departamentos = Department::where('status',1)->get();
        return view('users.create', compact('roles','departamentos'));
    }

    public function store(StoreUserRequest $request) {
        //dd($request->validated());
        $nuevo_usuario = User::create($request->validated());
        $nuevo_usuario->assignRole($request->roles);
        Mail::to($nuevo_usuario)->send(new NewUserMailable($nuevo_usuario));
        return redirect()->route('users.index')->with(['message' => 'Usuario guardado', 'typo' => 'success']);
    }
}
