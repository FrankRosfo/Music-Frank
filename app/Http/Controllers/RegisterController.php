<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Retortar vista de registro
     * @return view registro
     */
    public function create(){
        return view('auth.registro');
    }

    /**
     * Guarda el registro y ingresa a inicio
     * @return view inicio
     */
    public function guardar(Request $request){
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);
        return redirect()->to('login');
    }
}
