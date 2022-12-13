<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Role;
use Illuminate\Http\Request;
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

    public function store(Request $request) {
        //
    }
}
