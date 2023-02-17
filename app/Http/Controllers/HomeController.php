<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
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
        return view('home');
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



    public function get_usuarios_x_rol()
    {
        $respuesta = Role::withCount('users')->get();
        return json_encode($respuesta);
    }
}
