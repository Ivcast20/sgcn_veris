<?php

namespace App\Http\Controllers;

use App\Models\BiaEstado;
use App\Models\BiaProcess;
use App\Models\Department;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->where('status','=',true)->count();
        $bias = DB::table('bia_processes')->where('status',true)->count();
        $products = DB::table('products')->where('status',true)->count();

        $usuarios_x_roles = Role::withCount('users')->pluck('users_count', 'name');
        $usr_x_rol_lb = $usuarios_x_roles->keys();
        $usr_x_rol_data = $usuarios_x_roles->values();
        $usuarios_x_dept = Department::withCount('users')->pluck('users_count', 'name');
        $usr_x_dept_lb = $usuarios_x_dept->keys();
        $usr_x_dept_data = $usuarios_x_dept->values();

        $bias_estados = BiaEstado::withCount('bias')->pluck('bias_count', 'name');
        $bia_estados_lb = $bias_estados->keys();
        $bia_estados_data = $bias_estados->values();


        $bia_info_general = BiaProcess::withCount(['products','critical_products'])
                                // ->select('name','products_count', 'critical_products_count')
                                ->paginate(5);
        
        return view('home', compact(['users',
                                    'bias',
                                    'products',
                                    'usr_x_rol_lb',
                                    'usr_x_rol_data',
                                    'usr_x_dept_lb',
                                    'usr_x_dept_data',
                                    'bia_estados_lb',
                                    'bia_estados_data',
                                    'bia_info_general'
                                ]));
    }

    /**
     * Muestra el formulario para cambiar la  contraseña
     */
    public function change_password()
    {
        return view('password.change_password');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "La contraseña antigua es incorrecta");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "El cambio ha sido exitoso");
    }
}
