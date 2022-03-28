<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    /**
     * Retortar vista de login
     * @return view login
     */
    public function create(){
        return view('auth.login');
    }

    /**
     * Guarda el login y ingresa a inicio
     * @return view inicio
     */
    public function ingresar(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El usuario y/o contraseña son incorrectos'
            ]);
        }
        return redirect()->to('inicio');
    }

    /**
     * Cierra la sesion
     * @return view login
     */
    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}
